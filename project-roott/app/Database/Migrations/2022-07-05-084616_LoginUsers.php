<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LoginUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'  => 'INT',
                'constraint' => 30,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('playlistUsers');
    }

    public function down()
    {
        $this->forge->dropTable('playlistUsers');
    }
}
