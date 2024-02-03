<?php

namespace App\Models;

use CodeIgniter\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'umur', 'tinggi_badan', 'berat_badan', 'gender', 'aktifitas', 'kalori', 'defisit', 'surplus', 'status'];


    public function searchData($keyword)
    {
        // Lakukan query pencarian sesuai kebutuhan
        $builder = $this->table($this->table);
        $builder->like('nama', $keyword); // Gantilah nama_kolom dengan nama kolom yang sesuai

        return $builder->get()->getResultArray();
    }
}

