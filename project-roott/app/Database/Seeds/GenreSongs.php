<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class GenreSongs extends Seeder{
        public function run(){
            $data = [
               [
                "song_id" => 1,
                "genre_id" => 2,
               ]
            ];

            foreach($data as $genreItem){
                $songId = $genreItem["song_id"];
                $genreId = $genreItem["genre_id"];
                $this->db->query("INSERT INTO genre_songs (genre_id,song_id) VALUES ($genreId, $songId)");
            }
        }
    }
?>