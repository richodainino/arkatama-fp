<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '64',
            ],
            'password' => [
                'type' => 'CHAR',
                'constraint' => '64',
            ],
            'salt' => [
                'type' => 'CHAR',
                'constraint' => '64',
            ],
            'role' => [
                'type'       => 'ENUM',
                'constraint' => ['user', 'admin', 'manager'],
                'default' => 'user',
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
