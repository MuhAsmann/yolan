<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Pasien;
use App\Libraries\Notification;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;
    protected $session = null;
	protected $request = null;
	protected $notif;

	public function __construct()
	{
		$this->session = session();
		$this->request = \Config\Services::request();
		$this->db = \Config\Database::connect();
		$this->moduser = model('App\Models\User');
        $this->notif = new Notification();
	}


    public function login()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		if (isset($_SESSION['admin_logged_in'])) {
            return view('/');
		}

		if (!isset($_SESSION['admin_logged_in']) && (empty($username) || empty($password))) {
			$this->notif->message('Data login tidak lengkap', 'danger');
            return view('/');
		}

		if (!isset($_SESSION['admin_logged_in']) && isset($username) && isset($password)) {

			$datauser = ['username' => $username, 'password' => md5($password)];

			$user = $this->moduser->asObject()->where($datauser)->limit(1)->find();
			if (count($user) > 0) {
                $data_session = array(
                    'admin_user_id' => $user[0]->id,
                    'admin_username' => $user[0]->username,
                    'admin_logged_in' => TRUE
                );
                $this->session->set($data_session);
                session()->setFlashdata('message', 'Login Berhasil');
                session()->setFlashdata('message_type', 'success');
                return redirect()->to(base_url('/'));
			} else {
				$this->notif->message('Username atau password anda salah', 'danger');
                session()->setFlashdata('message', 'Username atau password anda salah');
                session()->setFlashdata('message_type', 'error');
				return view('/login');
			}
		}
	}

	public function logout()
	{
		$array_items = array('admin_user_id', 'admin_username', 'admin_role', 'admin_logged_in');
		$this->session->remove($array_items);
		return redirect()->to(base_url('/',));
	}


    public function index()
    {
        if (!isset($_SESSION['admin_logged_in'])) {
			$dataIndex['check'] = "Belum login";
			$this->session->removeTempdata('message');
			return view('/login', $dataIndex);
		} else {
			$dataIndex['check'] = "Sedang login";
		}

        $userModel = new User();
        $data['users'] = $userModel->findAll();

        $pasienModel = new Pasien();
        $data['pasien'] = $pasienModel->findAll();

        return view('index', $data);
    }

    public function hapus($id)
    {
        $pasienModel = new Pasien();
        $pasienModel->delete($id);

        $messageType = $pasienModel ? 'success' : 'error';
        $message = $pasienModel ? 'Data berhasil dihapus' : 'Gagal menghapus data';
        session()->setFlashdata('message', $message);
        session()->setFlashdata('message_type', $messageType);

        return redirect()->to(base_url('/'));
    }

    public function save()
    {
        $beratBadan = $this->request->getPost('berat_badan');
        $tinggiBadan = $this->request->getPost('tinggi_badan');
        $usia = $this->request->getPost('umur');
        $gender = $this->request->getPost('gender');
        $aktifitas_fisik = $this->request->getPost('aktifitas_fisik');

        $bmi = $beratBadan / (($tinggiBadan / 100) ** 2);
        
        function calculateBMR($gender, $weight, $height, $age) {
            if ($gender == 'pria') {
                return 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
            } elseif ($gender == 'wanita') {
                return 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
            } else {
                return null; // Menangani gender selain male atau female
            }
        }
        $bmr = calculateBMR($gender, $beratBadan, $tinggiBadan, $usia);

        $totalKaloriAktifitasFisik = array_sum(array_map('intval', $aktifitas_fisik));

        function getValueForConditions($totalKaloriAktifitasFisik) {
            if ($totalKaloriAktifitasFisik < 300){
                return 'a1';
            }elseif($totalKaloriAktifitasFisik <= 599){
                return 'a2';
            }else{
                return 'a3';
            }
        }
        $aktivitas = getValueForConditions($aktifitas_fisik);

        $faktorAktivitas = 1.0;

        switch (strval($aktivitas)) {
            case 'a1':
                if($gender == 'pria'){
                    $faktorAktivitas = 1.56;
                }
                $faktorAktivitas = 1.55;
                break;
            case 'a2':
                if($gender == 'pria'){
                    $faktorAktivitas = 1.76;
                }
                $faktorAktivitas = 1.70;
                break;
            case 'a3':
                if($gender == 'pria'){
                    $faktorAktivitas = 2.1;
                }
                $faktorAktivitas = 2.0;
                break;
        }
        
        $dailyCalories =  $bmr * $faktorAktivitas;

        function classifyBMI($bmi) {
            // Menentukan status BMI berdasarkan rentang tertentu
            if ($bmi < 18.5) {
                return 'Kurus';
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                return 'Normal';
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                return 'Berlebihan';
            } elseif ($bmi >= 30) {
                return 'Obesitas';
            } else {
                return 'BMI Tidak Valid (Invalid BMI)'; // Menangani nilai yang tidak valid
            }
        }

        $status = classifyBMI($bmi);

        $data = [
            'nama' => $this->request->getPost('name'),
            'umur' => $usia,
            'tinggi_badan' => $tinggiBadan,
            'berat_badan' => $beratBadan,
            'gender' => $gender,
            'aktifitas' => implode(", ", $aktifitas_fisik),
            'kalori' => $dailyCalories,
            'defisit' => $dailyCalories - 500,
            'surplus' => $dailyCalories + 500,
            'status' => $status
        ];

        $pasienModel = new Pasien();
        $pasienModel->insert($data);

        $messageType = $pasienModel ? 'success' : 'error';
        $message = $pasienModel ? 'Data berhasil ditambahkan' : 'Gagal menambahkan data';
        session()->setFlashdata('message', $message);
        session()->setFlashdata('message_type', $messageType);

        return redirect()->to(base_url('/'));
    }

    public function search()
    {
        // Ambil input pencarian dari form
        $keyword = $this->request->getVar('keyword');

        // Lakukan pencarian menggunakan model atau langsung ke database
        $model = new Pasien(); // Gantilah MyModel dengan nama model yang sesuai
        $data['pasien'] = $model->searchData($keyword);

        // Tampilkan hasil pencarian
        return view('index', $data);
    }

    public function put($id)
    {
        $pasienModel = new Pasien();
        $data['edit'] = $pasienModel->find($id);
        return $this->respond($data);
    }

    public function update($id)
    {
        $beratBadan = $this->request->getPost('berat_badan');
        $tinggiBadan = $this->request->getPost('tinggi_badan');
        $usia = $this->request->getPost('umur');
        $gender = $this->request->getPost('gender');
        $aktifitas_fisik = $this->request->getPost('aktifitas_fisik');

        $bmi = $beratBadan / (($tinggiBadan / 100) ** 2);
        
        function calculateBMR($gender, $weight, $height, $age) {
            if ($gender == 'pria') {
                return 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
            } elseif ($gender == 'wanita') {
                return 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
            } else {
                return null; // Menangani gender selain male atau female
            }
        }
        $bmr = calculateBMR($gender, $beratBadan, $tinggiBadan, $usia);

        $totalKaloriAktifitasFisik = array_sum(array_map('intval', $aktifitas_fisik));

        function getValueForConditions($totalKaloriAktifitasFisik) {
            if ($totalKaloriAktifitasFisik < 300){
                return 'a1';
            }elseif($totalKaloriAktifitasFisik <= 599){
                return 'a2';
            }else{
                return 'a3';
            }
        }
        $aktivitas = getValueForConditions($aktifitas_fisik);

        $faktorAktivitas = 1.0;

        switch (strval($aktivitas)) {
            case 'a1':
                if($gender == 'pria'){
                    $faktorAktivitas = 1.56;
                }
                $faktorAktivitas = 1.55;
                break;
            case 'a2':
                if($gender == 'pria'){
                    $faktorAktivitas = 1.76;
                }
                $faktorAktivitas = 1.70;
                break;
            case 'a3':
                if($gender == 'pria'){
                    $faktorAktivitas = 2.1;
                }
                $faktorAktivitas = 2.0;
                break;
        }
        
        $dailyCalories =  $bmr * $faktorAktivitas;

        function classifyBMI($bmi) {
            // Menentukan status BMI berdasarkan rentang tertentu
            if ($bmi < 18.5) {
                return 'Kurus';
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                return 'Normal';
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                return 'Berlebihan';
            } elseif ($bmi >= 30) {
                return 'Obesitas';
            } else {
                return 'BMI Tidak Valid (Invalid BMI)'; // Menangani nilai yang tidak valid
            }
        }

        $status = classifyBMI($bmi);

        $data = [
            'nama' => $this->request->getPost('name'),
            'umur' => $usia,
            'tinggi_badan' => $tinggiBadan,
            'berat_badan' => $beratBadan,
            'gender' => $gender,
            'aktifitas' => implode(", ", $aktifitas_fisik),
            'kalori' => $dailyCalories,
            'defisit' => $dailyCalories - 500,
            'surplus' => $dailyCalories + 500,
            'status' => $status
        ];

        $pasienModel = new Pasien();
        $pasienModel->update($id,$data);

        $messageType = $pasienModel ? 'success' : 'error';
        $message = $pasienModel ? 'Data berhasil ditambahkan' : 'Gagal menambahkan data';
        session()->setFlashdata('message', $message);
        session()->setFlashdata('message_type', $messageType);

        return redirect()->to(base_url('/'));
    }
}