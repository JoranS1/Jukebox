<?php
use App\Models\getSongList;

function queueSongData(){
    $items = [];

    $songs = new getSongList();

    $sessionSongsId = session()->get('queue');

    if(isset($sessionSongsId[0])){

        foreach($sessionSongsId as $song){
            $songItem = $songs->where('id', $song);
            array_push($items, $songItem[0]);
        }
    }
    return $items;
}
?>