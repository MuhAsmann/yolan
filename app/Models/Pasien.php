<?php

namespace App\Models;

use CodeIgniter\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'umur', 'tinggi_badan', 'berat_badan', 'gender', 'aktifitas', 'kalori', 'defisit', 'surplus', 'status'];
}