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
    public function getSponsor($description = false)
    {
        if ($description == false) {
            return $this->findAll();
        }
        return $this->where(['description' => $description])->first();
    }
}
