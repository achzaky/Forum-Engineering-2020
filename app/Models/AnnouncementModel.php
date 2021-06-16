<?php

namespace App\Models;

use CodeIgniter\Model;

class AnnouncementModel extends Model
{
    protected $table = 'announcement';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'message'];
}