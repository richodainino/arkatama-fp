<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
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
            'category' => [
                'type'       => 'ENUM',
                'constraint' => ['main course', 'dessert', 'snack', 'coffee', 'non-coffee', 'flavored tea'],
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['available', 'out of stock'],
                'default' => 'available',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '64',
            ],
            'desc' => [
                'type' => 'TEXT',
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
