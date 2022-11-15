<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'brand_id' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'model_id' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],            
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'entry_date' => [
                'type'           => 'datetime',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('items');
    }

    public function down()
    {
        $this->forge->dropTable('items');
    }
}
