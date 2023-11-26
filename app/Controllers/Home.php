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

        $rules = [
            ['k1', 'k2', 'k3', 'a3'],
            ['k1', 'k2', 'k4', 'k5', 'a3'],
            ['k1', 'k2', 'k4', 'k6', 'a3'],
            ['k1', 'k2', 'k4', 'k6', 'k7', 'a4'],
            ['k1', 'k8', 'a1'],
            ['k2', 'k8', 'k9', 'a2'],
            ['k2', 'k8', 'k9', 'k10', 'a2'],
            ['k2', 'k8', 'k9', 'k10', 'k11', 'a3'],
            ['k2', 'k8', 'k9', 'k10', 'k11', 'k12', 'a4'],
            ['k1', 'k8', 'k9', 'k13', 'a5'],
            ['k1', 'k8', 'k9', 'k13', 'k14', 'a5'],
            ['k1', 'k8', 'k9', 'k13', 'k14', 'k15', 'a5']
        ];

        $aktivitas = 'Unknown';
        $faktorAktivitas = 1.0;

        foreach ($rules as $rule) {
            if (count(array_diff($rule, $aktifitas_fisik)) == 0) {
                $aktivitas = end($rule);
                break;
            }
        }

        switch ($aktivitas) {
            case 'a1':
                $faktorAktivitas = 1.3;
                break;
            case 'a2':
                $faktorAktivitas = 1.56;
                break;
            case 'a3':
                $faktorAktivitas = 1.76;
                break;
            case 'a4':
                $faktorAktivitas = 2.1;
                break;
            case 'a5':
                $faktorAktivitas = 2.35;
                break;
        }
        // Debugging
        echo 'Faktor Aktivitas: ' . $faktorAktivitas . '<br>';

        $jumlahKalori = $bmi * $faktorAktivitas;

        // Debugging
        echo 'Jumlah Kalori: ' . $jumlahKalori . '<br>';

        $data = [
            'nama' => $this->request->getPost('name'),
            'umur' => $usia,
            'tinggi_badan' => $tinggiBadan,
            'berat_badan' => $beratBadan,
            'gender' => $gender,
            'aktifitas' => implode(", ", $aktifitas_fisik),
            'kalori' => $jumlahKalori,
            'defisit' => $jumlahKalori - 500,
            'surplus' => $jumlahKalori + 500,
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
