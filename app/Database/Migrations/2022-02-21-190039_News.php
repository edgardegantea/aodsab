<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constraint'        => 12,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'title' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'slug'  => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'body'  => [
                'type'              => 'TEXT'
            ]
        ]);  

        $this->forge->addKey('id', true);
        $this->forge->createTable('news', true);
    }

    public function down()
    {
        $this->forge->dropTable('news', true);
    }
}
