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
    ];
    public function getSponsor($name = false)
    {
        if ($name == false) {
            return $this->findAll();
        }
        return $this->where(['name' => $name])->first();
    }
}