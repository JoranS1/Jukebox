<?php
namespace App\Models;

use CodeIgniter\Model;

class getPlayList extends Model{
    protected $table = 'playlist';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $returnFields = ['list_name'];
}
?>