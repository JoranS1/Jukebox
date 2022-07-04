<?php
    namespace App\Controllers;

    class playlist extends BaseController {

        public function __construct()
        {
            helper("rememberUser");
        }

        public function Homepage(){
            $newSongModel = new \App\Models\getSongList;
            $newGenreModel = new \App\Models\getGenreList;

            $songList = $newSongModel->get()
                                     ->getResult();
            $genreList = $newGenreModel->get()
                                       ->getResult();  
                                       
             return view("playlist", ["songs" => $songList, "genres"=>$genreList]);                          
        }
        public function getOneSong($id){
            $newSongModel = new \App\Models\getSongList;
            
            $oneSong = $newSongModel->where("id", $id)
                                    ->first();
        }
        public function getOneGenre($genreId){
            $newSongModel = new \App\Models\getSongList;
            $newGenreModel = new \App\Models\getGenreList;

            $songList = $newSongModel->where("GenreId", $genreId)
                                         ->get()
                                         ->getResult();
            
            $oneGenre = $newGenreModel->where("GenreId", $genreId)
                                      ->get()
                                      ->getResult();

            return view("playlist", ["songs" => $songList, "genres"=>$genreList]);
            
        }
    }
?>