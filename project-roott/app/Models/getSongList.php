<?php
namespace App\Models;

use CodeIgniter\Model;

class getSongList extends Model{
    protected $table = 'songs';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $returnFields = ['id', 'songName', 'songLength', 'artistName']; 
}
?>