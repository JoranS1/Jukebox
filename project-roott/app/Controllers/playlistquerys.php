<?php
    namespace App\Controllers;

    /*class playlist extends BaseController {

        public function __construct()
        {
            helper("rememberUser");
        }

        public function Homepage(){
            $newSongModel = new \App\Models\getSongList;
            $newGenreModel = new \App\Models\getGenreList;
            $newPlayListModel = new \App\Models\getPlayList;
            $songList = $newSongModel->get()
                                     ->getResult();
            $genreList = $newGenreModel->get()
                                       ->getResult();  
            $playList = $newPlayListModel->where("userId", current_user()['userId'])
                                        ->get()
                                        ->getResultArray();                           
             return view("playlist", ["songs" => $songList, "genres"=>$genreList, "playlists"=>$playList]);                          
        }
        public function getOneSong($id){
            $newSongModel = new \App\Models\getSongList;
            
            $oneSong = $newSongModel->where("id", $id)
                                    ->first();
        }
        public function getOneGenre($genreId){
            $newSongModel = new \App\Models\getSongList;
            $newGenreModel = new \App\Models\getGenreList;
            $newPlayListModel = new \App\Models\getPlayList;

            $songList = $newSongModel->where("GenreId", $genreId)
                                         ->get()
                                         ->getResult();
            
            $oneGenre = $newGenreModel->where("GenreId", $genreId)
                                      ->get()
                                      ->getResult();
            $playList =  $newPlayListModel->where("id", $genreId)
                                          ->get()
                                          ->getResult();
            return view("playlist", ["songs" => $songList, "genres"=>$oneGenre, "playlist"=>$playList]);
            
        }
    }
?>*/