<?php
namespace App\Models;

use CodeIgniter\Model;

class getGenreSongs extends Model{
    protected $table =  'genre_songs';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['genre_id', 'song_id'];
}
?>