<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\FeedbackModel;
use App\Models\SponsorModel;
use App\Models\auditoriumModel;
use CodeIgniter\Email\Email;
use CodeIgniter\HTTP\Request;
use App\Models\UserTrafficModel;
use CodeIgniter\I18n\Time;

class Pages extends BaseController
{
    protected $user;
    protected $feedback;
    protected $sponsor;
    protected $auditorium;
    protected $userTraffic;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->feedback = new FeedbackModel();
        $this->sponsor = new SponsorModel();
        $this->auditorium = new auditoriumModel();
        $this->userTraffic = new UserTrafficModel();
    }

    public function index()
    {
        $ip = getUserIP();
        $currentTime = Time::now('Asia/Jakarta', 'en_US');
        // $ip = $this->request->getIPAddress();
        // $ip = $_SERVER['REMOTE_ADDR'];

        if (isset($_SESSION['logonUser'])) {
            if ($_SESSION['logonUser'] == 'aktif') {
                $userData = $this->user->where('email', $_SESSION['email'])
                    ->findAll();
                $this->userTraffic->insert([
                    'ip_address' => $ip,
                    'user_name' => $userData[0]['name'],
                    'id_peserta' =>
                    $userData[0]['id_peserta'],
                    'page' => 'main page',
                ]);
            } else {
                $this->userTraffic->insert([
                    'ip_address' => $ip,
                    'page' => 'main page',
                ]);
            }
        } else {
            $this->userTraffic->insert([
                'ip_address' => $ip,
                'page' => 'main page',
            ]);
        }

        $audVid = $this->auditorium->findAll();
        $data = [
            'audvid' => $audVid
        ];
        echo view('templates/header');
        echo view('home', $data);
        echo view('templates/footer');

        $_SESSION['state'] = '';
    }

    public function loginEmail()
    {
        $email
            = $this->request->getVar('email');
        $idPeserta =
            $this->request->getVar('idPeserta');

        $phoneNum = $this->request->getVar('phoneNumber');
        // $userData = $this->user->where('email' || 'name', $email)
        //     ->where('password', $password)
        //     ->findAll();

        $userData = $this->user->getWhere(['email' => $email, 'id_peserta' => $idPeserta]);
        $userData = $userData->getResultArray();
        // dd($userData);

        if ($userData == null) {
            $_SESSION['loginStatus'] = 'failed';
            return redirect()->to('/pages');
            unset($_SESSION['loginStatus']);
        } else {
            $_SESSION['logonUser'] = 'aktif';
            $_SESSION['username'] = $userData[0]['name'];
            $_SESSION['email'] =
                $userData[0]['email'];
            $_SESSION['id_peserta'] = $userData[0]['id_peserta'];
            $_SESSION['status'] = $userData[0]['status'];
            return redirect()->to('/pages');
        }
    }

    public function loginPhone()
    {
        $email
            = $this->request->getVar('email');
        $idPeserta =
            $this->request->getVar('idPeserta');

        $phoneNum = $this->request->getVar('phoneNum');
        // $userData = $this->user->where('email' || 'name', $email)
        //     ->where('password', $password)
        //     ->findAll();

        $userData = $this->user->getWhere(['phoneNum' => $phoneNum, 'id_peserta' => $idPeserta]);
        $userData = $userData->getResultArray();

        if ($userData == null) {
            $_SESSION['loginStatus'] = 'failed';
            return redirect()->to('/pages');
            unset($_SESSION['loginStatus']);
        } else {
            $_SESSION['logonUser'] = 'aktif';
            $_SESSION['username'] = $userData[0]['name'];
            $_SESSION['email'] =
                $userData[0]['email'];
            $_SESSION['id_peserta'] = $userData[0]['id_peserta'];
            $_SESSION['status'] = $userData[0]['status'];
            return redirect()->to('/pages');
        }
    }


    public function logout()
    {
        session_destroy();
        return redirect()->to('/pages');
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