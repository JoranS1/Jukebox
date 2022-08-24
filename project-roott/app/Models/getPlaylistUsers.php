<?php
namespace App\Models;

use CodeIgniter\Model;

class getPlayListUsers extends Model{
    protected $table = 'playlist_author';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['playlist_id', 'user_id'];
}
?>