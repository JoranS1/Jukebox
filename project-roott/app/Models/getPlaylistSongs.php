<?php
namespace App\Models;

use CodeIgniter\Model;

class getPlayListSongs extends Model{
    protected $table =  'playlist_songs';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['playlist_id', 'song_id'];
}
?>