<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Models extends Migration
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
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'entry_date' => [
                'type'           => 'datetime',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('models');
    }
    

    public function down()
    {
        $this->forge->dropTable('models');
    }
}
