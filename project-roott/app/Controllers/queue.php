<?php

namespace App\Controllers;

use App\Models\getPlayList;
use App\Models\getPlayListSongs;
use App\Models\getPlayListUsers;

class queue extends BaseController{
    public function __construct()
    {
        helper("userLoginData");
    }
    public function index($id){
        $user = userLoginData();
        if(isset($user['username'])){
            if(isset($id)&& is_numeric($id)){
                if(isset(session()->get('queue', [$id]))){
                    if(!in_array($id, session()->get('queue'))){
                        session()->push('queue', [$id]);
                    }
                }
                else{
                    session()->set("queue", [$id]);
                }
            }
        }
        return redirect("/");
    }
    public function removeQueue($id){
        $queue = session()->get("queue");
        foreach($queue as $position=>$item){
            if($item == $id){
                unset($queue[$position]);
            }
        }
        session()->set('queue', $queue);
        return redirect()->back();
    }

    public function makePlaylist(){
        $post = $this->request->getPost();

        $user = userLoginData();

        if(isset($user['id'])){
            if(isset($post['list_name'])){
                $playlists = new getPlayList();
                $playlistSongs = new getPlayListSongs();
                $playlistUsers = new getPlayListUsers();
                
                $playlists->insert($post);

                $lastPlaylist = $playlists->where('list_name', $post['list_name'])->orderBy('id', 'desc')->first();

                $playlistUserData['playlist_id'] = $lastPlaylist['id'];
                $playlistUserData['user_id'] = $user['id'];
                $playlistUsers->insert($playlistUserData);

                $queue = session()->get("queue");

                var_dump($queue);

                foreach($queue as $queueItem){
                    $songData['song_id'] = $queueItem;
                    $songData['playlist_id']=$lastPlaylist['id'];
                    $playlistSongs->insert($songData);
                }
                session()->remove("queue");
                return redirect("/");
            }
            else{
                $data['title'] = "Make a new list";
                echo view("templates/head", $data);
                echo view("templates/header", $data);
            }
        }
        else{
            return redirect()->back();
        }
    }
}
?>