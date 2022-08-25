<?php

namespace App\Controllers;

use App\Models\getSongList;
use App\Models\getGenreList;
use App\Models\getGenreSongs;

class Home extends BaseController{
    public function __construct()
    {
        helper("userLoginData");
        helper("queueSongData");
    }
    public function index(){
        $data =  [
            'title' => "Home",
            'isLoggedIn' => userLoginData(),
        ];

        echo view('template/head', $data);
        echo view('template/header', $data);

        $songs = new getSongList();
        $genres = new getGenreList();
        $genreSongs = new getGenreSongs();

        $allSongs = $songs->findAll();
        echo view('Home/index_base_start');

        foreach($allSongs as $song){
            $genreSong = $genreSongs->where('song_id', $song['id'])->find();
            $songGenre = $genres->where('id', $genreSong[0]['genre_id'])->find();

            $data['songName'] = $song['songName'];
            $data['artistName'] = $song['artistName'];
            $data['songId'] = $song['id'];
            $data['genreName'] = $songGenre[0]['name'];

            echo view('Home/song', $data);
        }
        echo view('Home/index_base_end');
        $queue = queueSongData();

        $data['queue'] = $queue;
        echo view('templates/view', $data);
    }

}
?>
