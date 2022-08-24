<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class PlaylistAuthor extends Seeder{
        public function run(){
            $data = [
              [
                "playlist_id" => 1,
                "user_id" => 1,
              ],
            ];

            foreach($data as $playlistItem){
               $playlistId = $playlistItem["playlist_id"];
               $userId = $playlistItem["user_id"];
                $this->db->query("INSERT INTO playlist_author (playlist_id, user_id) VALUES ('$playlistId', '$userId')");
            }
        }
    }
?>