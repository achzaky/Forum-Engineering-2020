<?php

namespace App\Models;

use CodeIgniter\Model;

class UserTrafficModel extends Model
{
    protected $table = 'user_traffic';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id',
        'ip_address',
        'user_name',
        'id_peserta',
        'page',
        'time'
    ];
}