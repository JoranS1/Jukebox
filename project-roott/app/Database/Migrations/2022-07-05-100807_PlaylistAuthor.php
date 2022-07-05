<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PlaylistAuthor extends Migration
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
            'playlist_id' => [
                'type' => 'INT',
                'constraint' => 30,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 30,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('playlist_author');
    }

    public function down()
    {
        $this->forge->dropTable('playlist_author');
    }
}
