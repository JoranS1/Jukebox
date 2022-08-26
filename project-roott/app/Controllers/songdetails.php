<?php
namespace App\Controllers;

use App\Models\getSongList;
use App\Models\getGenreList;
use App\Models\getGenreSongs;

class songDetails extends BaseController{
    public function __construct()
    {
        helper("userLoginData");
    }

    public function index($id){
        $songs = new getSongList();
        $song = $songs->where('id', $id)->find();

        $genreSongs = new getGenreSongs();
        $genreSong = $genreSongs->where('song_id', $song[0]['id'])->find();

        $genres = new getGenreList();
        $genre = $genres->where('id', $genreSong[0]['genre_id'])->find();

        $data = [
            'title' => $song[0]['songName'] . ' by ' . $song[0]['artistName'],
            'isLoggedIn' => userLoginData(),
        ];

        echo view('templates/head', $data);
        echo view('templates/header');

        $data['song'] = $song[0];
        $data['genre']= $genre[0];

        echo view('songDetail/index', $data);
    }
}
?>