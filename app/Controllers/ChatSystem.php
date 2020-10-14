<?php

namespace App\Controllers;

use App\Models\ChatModel;
use Chat;

class ChatSystem extends BaseController
{
    protected $chat;

    public function __construct()
    {
        $this->chat = new ChatModel();
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

    public function sendChat()
    {
        $chatMessage = file_get_contents('php://input');
        $chatMessage = json_decode($chatMessage, true);
        $data = [
            'chatMessage' => $chatMessage['chatMessage']
        ];
        $this->chat->insert([
            'chatMessage' => $chatMessage['chatMessage'],
            'username' => $_SESSION['username']
        ]);
        return json_encode(['success' => TRUE, 'ChatMessage' => $chatMessage['chatMessage']]);
    }

    public function loadChat()
    {
        $this->chat->orderBy('id', 'ASC');
        $data = $this->chat->findAll();
        for ($i = 0; $i < sizeof($data); $i++) {
            if ($data[$i]['username'] == $_SESSION['username']) {
                $data[$i]['messageDirection'] = 'right';
            } else {
                $data[$i]['messageDirection'] = 'left';
            }
        }
        return json_encode($data);
    }
}