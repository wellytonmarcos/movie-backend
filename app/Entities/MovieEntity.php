<?php

namespace App\Entities;

use CodeIgniter\Entity;

class MovieEntity extends Entity
{
    protected $casts = [
        'id' => 'int',
        'score' => 'int',
        'isComplete' => 'int',
    ];
}
