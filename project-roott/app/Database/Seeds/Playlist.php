<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class playlist extends Seeder{
        public function run(){
            $data = [
               'test',
               'my favorites'
            ];

            foreach($data as $playlistItem){
               
                $this->db->query("INSERT INTO playlistUser (list_name) VALUES ('$playlistItem')");
            }
        }
    }
?>