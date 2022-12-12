<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hero extends Migration
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
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['Approved', 'Waiting', 'Not Approved'],
                'default' => 'Waiting'
            ],
            'title' => [
                'type'       => 'TEXT',
            ],
            'desc' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => true,
            ],
            'cta_title' => [
                'type' => 'VARCHAR',
                'constraint' => '32',
                'null' => true,
            ],
            'cta_ref' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => true,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'deleted_at DATETIME DEFAULT NULL',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('hero');
    }

    public function down()
    {
        $this->forge->dropTable('hero');
    }
}
