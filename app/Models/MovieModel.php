<?php

namespace App\Models;

use CodeIgniter\Model;

class MovieModel extends Model
{
    protected $table      = 'movie';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     =
    'App\Entities\MovieEntity';

    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'isComplete', 'score'];

}
