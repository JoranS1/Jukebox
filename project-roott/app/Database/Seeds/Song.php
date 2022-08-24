<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class Song extends Seeder{
        public function run(){
            $data = [
              [
                "songName" => "Rasputin",
                "songLength" => "2:50",
                "artistName" => "Boney M",
              ],[
              "songName" => "Faint",
              "songLength" => "2:40",
              "artistName" => "Linkin Park",
              ]
            ];

            foreach($data as $songItem){
               $songName = $songItem["songName"];
               $songLength = $songItem["songLength"];
               $artistName = $songItem["artistName"];
                $this->db->query("INSERT INTO songs (songName, songLength, artistName) VALUES ('$songName', '$songLength','$artistName')");
            }
        }
    }
?>