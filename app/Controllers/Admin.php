<?php

namespace App\Controllers;

use App\Models\SponsorModel;

class Admin extends BaseController
{
    protected $sponsor;

    public function __construct()
    {
        $this->sponsor = new SponsorModel();
    }

    public function index()
    {
        echo view('templates/header');
        echo view('admin');
        echo view('templates/footer');
    }

    public function insertData()
    {

        $this->sponsor->save([
            'name' => $this->request->getVar('sponsorName'),

            'description'
            => '',

            'phoneNumber'
            => $this->request->getVar('sponsorPhone'),

            'video'
            => $this->request->getVar('sponsorVideo'),

            'brosur'
            => $this->request->getVar('sponsorBrosur'),

            'sponsor_banner'
            => $this->request->getVar('sponsorBanner'),

            'sponsor_logo'
            => $this->request->getVar('sponsorLogo'),

            'sponsor_background'
            => $this->request->getVar('sponsorBackground'),

            'sponsor_nameDisplay'
            => $this->request->getVar('sponsorNameDisp')
        ]);
    }

    public function boothCheck()
    {
        $data = [
            'sponsorData' => [
                'name' => $this->request->getVar('sponsorName'),

                'description'
                => $this->request->getVar('sponsorDesc'),

                'phoneNumber'
                => $this->request->getVar('sponsorPhone'),

                'video'
                => $this->request->getVar('sponsorVideo'),

                'brosur'
                => $this->request->getVar('sponsorBrosur'),

                'sponsor_banner'
                => $this->request->getVar('sponsorBanner'),

                'sponsor_logo'
                => $this->request->getVar('sponsorLogo'),

                'sponsor_background'
                => $this->request->getVar('sponsorBackground'),

                'sponsor_nameDisplay'
                => $this->request->getVar('sponsorNameDisp')
            ]

        ];
        dd($data);
    }

    //--------------------------------------------------------------------

}