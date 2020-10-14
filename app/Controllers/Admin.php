<?php

namespace App\Controllers;

use App\Models\SponsorModel;
use App\Models\auditoriumModel;

class Admin extends BaseController
{
    protected $sponsor;
    protected $auditorium;

    public function __construct()
    {
        $this->sponsor = new SponsorModel();
        $this->auditorium = new auditoriumModel();
    }

    public function index()
    {
        $audVid = $this->auditorium->findAll();
        $sponsorData = $this->sponsor->findAll();
        $data = [
            'sponsorData' => $sponsorData,
            'audvid' => $audVid
        ];
        echo view('templates/header');
        echo view('adminDashboard', $data);
        echo view('templates/footer');
    }

    public function input()
    {
        echo view('templates/header');
        echo view('admin');
        echo view('templates/footer');
    }

    public function insertData()
    {

        $vidCode = preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "//www.youtube.com/embed/$2?autoplay=1",
            $this->request->getVar('sponsorVideo')
        );

        $this->sponsor->insert([
            'name' => $this->request->getVar('sponsorName'),

            'description'
            => '',

            'phoneNumber'
            => $this->request->getVar('sponsorPhone'),

            'video'
            => $vidCode,

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

        $checkData =  $this->sponsor->findAll();
        dd($checkData);
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

    public function videoAuditorium()
    {

        $vidCode = preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "//www.youtube.com/embed/$2",
            $this->request->getVar('audVid')
        );

        $data = [
            'video' => 'https:' . $vidCode . '?autoplay=0'
        ];

        $this->auditorium->update($id = 1111, $data);
        return redirect()->to('/admin');
    }

    //--------------------------------------------------------------------

}