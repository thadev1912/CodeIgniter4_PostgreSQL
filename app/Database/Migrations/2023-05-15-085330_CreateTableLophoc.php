<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableLophoc extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ma_lop' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'ten_lop' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],           
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('lophoc');
    }

    public function down()
    {
        $this->forge->dropTable('lophoc');
    }
}
