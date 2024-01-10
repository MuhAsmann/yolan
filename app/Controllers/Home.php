<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Pasien;

class Home extends BaseController
{
    public function index()
    {
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
                return 'Kurus (Underweight)';
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                return 'Normal (Normal Weight)';
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                return 'Berlebihan berat badan (Overweight)';
            } elseif ($bmi >= 30) {
                return 'Obesitas (Obese)';
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
}
