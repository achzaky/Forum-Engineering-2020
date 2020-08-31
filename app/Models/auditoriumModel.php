<?php

namespace App\Models;

use CodeIgniter\Model;

class auditoriumModel extends Model
{
    protected $table = 'auditorium';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'video'];
}