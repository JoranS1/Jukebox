<?php

namespace App\Models;

use CodeIgniter\Model;

class getGenreList extends Model{
    protected $table =  'genres';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['id', 'name'];
}
?>