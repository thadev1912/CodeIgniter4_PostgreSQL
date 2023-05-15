<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableSinhvien extends Migration
{
    public function up()
    {
        
            $this->forge->addField([
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'ma_sv' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '100',
                ],
                'ten_sv' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'ghichu'=> [
                    'type'=>'TEXT',
                    'null'=>true
                ]
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('sinhvien');
        
    
    }

    public function down()
    {
        $this->forge->dropTable('sinhvien');
    }
}
