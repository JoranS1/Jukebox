<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class PlaylistSongs extends Seeder{
        public function run(){
            $data = [
              [
                "playlist_id" => 1,
                "song_id" => 1,
              ],
            ];

            foreach($data as $playlistItem){
               $playlistId = $playlistItem["playlist_id"];
               $songId = $playlistItem["song_id"];
                $this->db->query("INSERT INTO playlist_songs (playlist_id, song_id) VALUES ('$playlistId', '$songId')");
            }
        }
    }
?>