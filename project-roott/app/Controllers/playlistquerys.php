<?php
    namespace App\Controllers;

    use App\Models\getPlayList;
    use App\Models\getUsers;
    use App\Models\getPlayListUsers;
    use App\Models\getPlayListSongs;
    use App\Models\getSongList;

    class PlayList extends BaseController{
        public function __construct()
        {
            helper('userLoginData');
            helper('queueSongData');
        }

        public function index(){
            $data = [
                'title' => "Playlist",
                'isLoggedIn' => userLoginData(),
            ];
            echo view('templates/head', $data);
            echo view('templates/header', $data);

            $playlists = new getPlayList();
            $users = new getUsers();
            $playlistUsers = new getPlayListUsers();

            $data['playlist'] = $playlists->findAll();
            $data['users'] = $users->findAll();
            $data['playlist_author'] = $playlistUsers->findAll();

            echo view("playlist/index/all_index", $data);
        }
        public function detail($id){
            $playlists = new getPlayList();
            $users = new getUsers();
            $playlistUsers = new getPlayListUsers();
            $playlistSongs = new getPlayListSongs();
            $songs = new getSongList();

            $playlist = $playlists->where('id', $id)->first();

            $data = [
                'title' => $playlist['list_name'],
                'isLoggedIn' => userLoginData(),
            ];
            echo view('templates/head', $data);
            echo view('templates/header', $data);

            $playlistUser = $playlistUsers->where('playlist_id', $playlist['id'])->first();
            $user = $users->where('id', $playlistUser['user_id'])->first();

            $data['user'] = $user['username'];
            echo view("playlist/detail/title", $data);

            echo "<ul class='flex gap-7'>";
            $playlistSong = $playlistSongs->where('playlist_id', $playlist['id'])->findAll();
            foreach($playlistSong as $item){
                $song = $songs->where('id', $item['song_id'])->first();
                $data=[
                    'id' => $song['id'],
                    'songName'=>$song['songName'],
                    'artist' => $song['artistName'],
                    'length' => $song['songLength'],
                ];
                echo view('playlist/detail/song', $data);
            }

            echo "</ul>";
        }
    }
?>