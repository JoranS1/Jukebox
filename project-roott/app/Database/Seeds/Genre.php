<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class genre extends Seeder{
        public function run(){
            $data = [
               "rock",
               "pop",
               "soul",
               "80s"
            ];

            foreach($data as $genreItem){
                $this->db->query("INSERT INTO genres (name) VALUES ('$genreItem')");
            }
        }
    }
?>