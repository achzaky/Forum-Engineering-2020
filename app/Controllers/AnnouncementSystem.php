<?php

namespace App\Controllers;

use App\Models\AnnouncementModel;
use Chat;

class AnnouncementSystem extends BaseController
{
    protected $announcement;

    public function __construct()
    {
        $this->announcement  = new AnnouncementModel();
    }

    public function index()
    {
        if (isset($_SESSION['logonUser'])) {
            if ($_SESSION['logonUser'] == 'aktif') {
                $data = [];
                echo view('templates/header');
                echo view('chatSystemTest', $data);
                echo view('templates/footer');
            } else {
                return redirect()->to('/pages');
            }
        } else {
            return redirect()->to('/pages');
        }
    }

    public function sendAnnouncement()
    {
        $announcementMessage = file_get_contents('php://input');
        $announcementMessage = json_decode($announcementMessage, true);
        $data = [
            'announcementMessage' => $announcementMessage['announcementMessage']
        ];
        $this->announcement->insert([
            'message' => $announcementMessage['announcementMessage'],
        ]);
        return json_encode(['success' => TRUE, 'announcementMessage' => $announcementMessage['announcementMessage']]);
    }

    public function loadAnnouncement()
    {
        $this->announcement->orderBy('id', 'ASC');
        $data = $this->announcement->findAll();
        return json_encode($data);
    }
}