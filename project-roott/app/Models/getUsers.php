<?php
namespace App\Models;

use CodeIgniter\Model;

class getUsers extends Model{
    protected $table = 'playlistUsers';
    protected $returnType = 'array';
    protected $allowedFields = ['username', 'password'];
}
?>