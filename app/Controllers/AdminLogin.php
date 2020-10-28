<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SponsorModel;
use App\Models\auditoriumModel;

class AdminLogin extends BaseController
{
    protected $user;
    protected $sponsor;
    protected $auditorium;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->sponsor = new SponsorModel();
        $this->auditorium = new auditoriumModel();
    }

    public function index()
    {
        session_destroy();
        echo view('templates/header');
        echo view('loginAdmin');
        echo view('templates/footer');
    }

    public function doLogin()
    {
        $email
            = $this->request->getVar('email');
        $password =
            $this->request->getVar('password');
        $status =
            $this->request->getVar('status');
        $userData = $this->user->where('email', $email)
            ->where('id_peserta', $password)
            ->where('status', 'admin')
            ->findAll();
        if ($userData == null) {
            return redirect()->to('/admin');
        } else {
            $_SESSION['logonAdmin'] = 'aktif';
            $_SESSION['username'] = $userData[0]['name'];
            return redirect()->to('/admin/index',);
        }
    }


    // --------------------------------------------------------------------

}