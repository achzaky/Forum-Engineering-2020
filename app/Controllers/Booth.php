<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Email\Email;
use App\Models\SponsorModel;
use App\Models\UserTrafficModel;

class Booth extends BaseController
{
    protected $user;
    protected $sponsor;
    protected $userTraffic;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->sponsor = new SponsorModel();
        $this->userTraffic = new UserTrafficModel();
    }

    public function index($sponsorBooth = '')
    {
        $_SESSION['state'] = 'exhibition';
        $sponsorData = $this->sponsor->where('name', $sponsorBooth)
            ->findAll();

        $data = [
            'sponsorData' => $sponsorData
        ];

        // echo 'Ini booth sponsor';

        echo view('templates/header');
        echo view('booth', $data);
        echo view('templates/footer');
    }

    public function boothK($sponsor)
    {
        $ip = $this->request->getIPAddress();
        $this->userTraffic->insert([
            'ip_address' => $ip,
            'user_name' => $_SESSION['username'],
            'id_peserta' =>
            $_SESSION['id_peserta'],
            'page' => 'booth ' . $sponsor,
        ]);
        $_SESSION['state'] = 'exhibition';
        $sponsorData = $this->sponsor->where('name', $sponsor)
            ->findall();

        $data = [
            'sponsorData' => $sponsorData
        ];
        echo view('templates/header');
        echo view('boothK', $data);
        echo view('templates/footer');
    }

    public function boothB($sponsor)
    {
        $ip = $this->request->getIPAddress();
        $this->userTraffic->insert([
            'ip_address' => $ip,
            'user_name' => $_SESSION['username'],
            'id_peserta' =>
            $_SESSION['id_peserta'],
            'page' => 'booth ' . $sponsor,
        ]);

        $_SESSION['state'] = 'exhibition';
        $sponsorData = $this->sponsor->where('name', $sponsor)
            ->findall();

        $data = [
            'sponsorData' => $sponsorData
        ];
        echo view('templates/header');
        echo view('boothB', $data);
        echo view('templates/footer');
    }

    public function boothW()
    {
        // $sponsorData = $this->sponsor->where('name', $sponsor)
        //     ->findall();

        // $data = [
        //     'sponsorData' => $sponsorData
        // ];

        $ip = $this->request->getIPAddress();
        $this->userTraffic->insert([
            'ip_address' => $ip,
            'user_name' => $_SESSION['username'],
            'id_peserta' =>
            $_SESSION['id_peserta'],
            'page' => 'booth wika',
        ]);
        $_SESSION['state'] = 'exhibition';
        echo view('templates/header');
        echo view('boothW');
        echo view('templates/footer');
    }
    //--------------------------------------------------------------------

}