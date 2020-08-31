<?php

namespace App\Models;

use CodeIgniter\Model;

class SponsorModel extends Model
{
    protected $table = 'sponsor';
    protected $primaryKey = 'name';

    protected $allowedFields = [
        'name',
        'description',
        'phoneNumber',
        'video',
        'brosur',
        'sponsor_banner',
        'sponsor_logo',
        'sponsor_background',
        'sponsor_nameDisplay'
    ];
}