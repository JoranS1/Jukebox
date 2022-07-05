<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class Song extends Seeder{
        public function run(){
            $data = [
              [
                "songName" => "Rasputin",
                "artistName" => "Boney M",
              ],[
              "songName" => "Faint",
                "artistName" => "Linkin Park",
              ]
            ];

            foreach($data as $songItem){
               $songName = $songItem["songName"];
               $artistName = $songItem["artistName"];
                $this->db->query("INSERT INTO songs (songName, artistName) VALUES ('$songName', '$artistName')");
            }
        }
    }
?>