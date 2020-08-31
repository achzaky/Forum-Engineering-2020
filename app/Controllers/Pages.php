<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\FeedbackModel;
use App\Models\SponsorModel;
use App\Models\auditoriumModel;
use CodeIgniter\Email\Email;

class Pages extends BaseController
{
    protected $user;
    protected $feedback;
    protected $sponsor;
    protected $auditorium;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->feedback = new FeedbackModel();
        $this->sponsor = new SponsorModel();
        $this->auditorium = new auditoriumModel();
    }

    public function index()
    {
        $audVid = $this->auditorium->findAll();
        $data = [
            'audvid' => $audVid
        ];
        echo view('templates/header');
        echo view('home', $data);
        echo view('templates/footer');
    }

    public function login()
    {
        $email
            = $this->request->getVar('email');
        $password =
            $this->request->getVar('password');
        $userData = $this->user->where('email', $email)
            ->where('password', $password)
            ->findAll();
        if ($userData == null) {
            return redirect()->to('/pages');
        } else {
            $_SESSION['logonUser'] = 'aktif';
            return redirect()->to('/pages');
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to('/pages');
    }

    public function testInputData()
    {
        $this->feedback->insert([
            'id' => '123',
            'use_email' => 'test@test.com',
            'feedbackMessage' => 'Testing doang'
        ]);

        echo 'Input data success!';
    }

    public function testData()
    {
        $testVid = $this->auditorium->findAll();
        $data = [
            'audvid' => $testVid
        ];

        dd($testVid);
        echo view('templates/header');
        echo view('boothChekcer', $data);
        echo view('templates/footer');
    }

    //--------------------------------------------------------------------

}