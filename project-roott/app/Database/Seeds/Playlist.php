<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class Playlist extends Seeder{
        public function run(){
            $data = [
               'test',
               'my favorites'
            ];

            foreach($data as $playlistItem){
               
                $this->db->query("INSERT INTO playlist (list_name) VALUES ('$playlistItem')");
            }
        }
    }
?>