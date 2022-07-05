<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GenreSongs extends Migration
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
            'genre_id' => [
                'type' => 'INT',
                'constraint' => 30,
            ],
            'song_id' => [
                'type' => 'INT',
                'constraint' => 30,
            ]
        ]);
    
    $this->forge->addKey('id', true);
    $this->forge->createTable('genre_songs');
}

public function down()
{
    $this->forge->dropTable('genre_songs');
}
}
