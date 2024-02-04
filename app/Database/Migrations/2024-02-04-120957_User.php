<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
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
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('user');

        // Insert sample data
        $data = [
            [
                'email' => 'yolanda@gmail.com',
                'password' => md5('123456'),
            ],
            [
                'email' => 'yuhuu@gmail.com',
                'password' => md5('123456'),
            ],
        ];
        $this->db->table('user')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
