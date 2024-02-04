<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasienTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'umur' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'tinggi_badan' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'berat_badan' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'aktifitas' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'kalori' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'defisit' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'surplus' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('pasien');

        // Insert sample data
        $data = [
            [
                'nama' => 'testingtes',
                'umur' => 201,
                'tinggi_badan' => 1711,
                'berat_badan' => 701,
                'gender' => 'pria',
                'aktifitas' => 'mengemudi, mengetik, menyetrika, jalan kaki',
                'kalori' => 33099,
                'defisit' => 32599.342,
                'surplus' => 33599.342,
                'status' => 'Kurus',
            ],
            [
                'nama' => 'Asman',
                'umur' => 22,
                'tinggi_badan' => 171,
                'berat_badan' => 56,
                'gender' => 'pria',
                'aktifitas' => 'mengetik, menyapu, mengajar',
                'kalori' => 2801,
                'defisit' => 2300.718,
                'surplus' => 3300.718,
                'status' => 'Normal',
            ],
            [
                'nama' => 'Asman Testing',
                'umur' => 22,
                'tinggi_badan' => 171,
                'berat_badan' => 56,
                'gender' => 'pria',
                'aktifitas' => 'mengetik, menyapu, mengajar',
                'kalori' => 2801,
                'defisit' => 2300.718,
                'surplus' => 3300.718,
                'status' => 'Normal',
            ]
        ];
        $this->db->table('pasien')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('pasien');
    }
}