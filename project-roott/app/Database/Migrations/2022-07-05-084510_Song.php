<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Song extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 30,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'songName' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'songLength' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],

            'artistName' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('songs');
    }

    public function down()
    {
        $this->forge->dropTable('songs');
    }
    }

   
