<?php

namespace App\Controllers;

use App\Models\SponsorModel;
use App\Models\auditoriumModel;
use CodeIgniter\HTTP\Request;

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
        $sponsorData = $this->sponsor->getSponsor();
        $data = [
            'sponsorData' => $sponsorData,
            'audvid' => $audVid
        ];
        // dd($sponsorData);
        echo view('templates/header');
        echo view('adminDashboard', $data);
        echo view('templates/footer');
    }

    public function detail($name)
    {
        // // echo $description;
        $data = [
            'sponsorData' => $this->sponsor->getSponsor($name)
        ];
        // dd($data);
        if (empty($data['sponsorData'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Sponsor ' . $name . ' tidak terdaftar.');
        }
        echo view('templates/header');
        echo view('detailSponsor', $data);
        echo view('templates/footer');
    }

    public function input()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        echo view('templates/header');
        echo view('admin', $data);
        echo view('templates/footer');
    }

    public function insertData()
    {

        // $sponsorData = $this->sponsor->findAll();
        // $data = [
        //     'sponsorData' => $sponsorData,
        // ];
        $vidCode = preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "//www.youtube.com/embed/$2?autoplay=1",
            $this->request->getVar('sponsorVideo')
        );
        // validasi input
        if (!$this->validate([
            'sponsorName' => [
                'rules' => 'required|is_unique[sponsor.name]',
                'errors' => [
                    'required' => '{field} Nama Sponsor harus diisi',
                    'is_unique' => '{field} Sponsor tersebut sudah terdaftar'
                ]
            ],
            'sponsorBrosur' => [
                'rules' => 'uploaded[sponsorBrosur]|max_size[sponsorBrosur,1024]|is_image[sponsorBrosur]|mime_in[sponsorBrosur,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar untuk Brosur ',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Pilih Gambar la',
                    'mime_in'  => 'Pilih Gambar dong'
                ]
            ],
            'sponsorBanner' => [
                'rules' => 'uploaded[sponsorBrosur]|max_size[sponsorBrosur,1024]|is_image[sponsorBrosur]|mime_in[sponsorBrosur,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar untuk Brosur ',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Pilih Gambar la',
                    'mime_in'  => 'Pilih Gambar dong'
                ]
            ],
            'sponsorLogo' => [
                'rules' => 'uploaded[sponsorBrosur]|max_size[sponsorBrosur,1024]|is_image[sponsorBrosur]|mime_in[sponsorBrosur,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar untuk Brosur ',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Pilih Gambar la',
                    'mime_in'  => 'Pilih Gambar dong'
                ]

            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/admin-input')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/admin-input')->withInput();
        }
        // Ambil Gambar
        $brosurUploaded = $this->request->getFile('sponsorBrosur');
        $logoUploaded = $this->request->getFile('sponsorLogo');
        $bannerUploaded = $this->request->getFile('sponsorBanner');

        // Pindah file ke folder gamabr
        $brosurUploaded->move('assets/photos/sponsor');
        $logoUploaded->move('assets/photos/sponsor/logo');
        $bannerUploaded->move('assets/photos/sponsor/banner');

        // ambil nama file
        $namaBrosur = $brosurUploaded->getName();
        $namaLogo = $logoUploaded->getName();
        $namaBanner = $bannerUploaded->getName();

        $description = url_title($this->request->getVar('sponsorName'), '-', true);
        // insert data Sponsor
        $this->sponsor->insert([
            'name' => $this->request->getVar('sponsorName'),

            'description'
            => $description,

            'phoneNumber'
            => $this->request->getVar('sponsorPhone'),

            'video'
            => $vidCode,

            'brosur'
            => $namaBrosur,

            'sponsor_banner'
            => $namaBanner,

            'sponsor_logo'
            => $namaLogo,

            'sponsor_background'
            => $this->request->getVar('sponsorBackground'),

            'sponsor_nameDisplay'
            => $this->request->getVar('sponsorNameDisp')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/Admin');
        // $checkData =  $this->sponsor->findAll();
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

    public function doLogin()
    {
        $email
            = $this->request->getVar('email');
        $password =
            $this->request->getVar('password');
        $userData = $this->user->where('email', $email)
            ->where('password', $password)
            ->findAll();
        if ($userData == null) {
            return redirect()->to('/admin');
        } else {
            $_SESSION['logonUser'] = 'aktif';
            return redirect()->to('/adminDashboard', $userData);
        }
    }

    public function delete($name)
    {
        $sponsorData = $this->sponsor->find($name);
        // hapus gambar
        unlink('assets/photos/sponsor/' . $sponsorData['brosur']);
        unlink('assets/photos/sponsor/logo/' . $sponsorData['sponsor_logo']);
        unlink('assets/photos/sponsor/banner/' . $sponsorData['sponsor_banner']);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        $this->sponsor->delete($name);
        return redirect()->to('/admin/index');
    }

    public function edit($description)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'sponsor' => $this->sponsor->getSponsor($description)
        ];
        echo view('templates/header');
        echo view('editSponsor', $data);
        echo view('templates/footer');
    }

    public function update($name)
    {
        // / check judul -> ngambil data lama
        $sponsorLama = $this->sponsor->getSponsor($this->request->getVar('description'));
        if ($sponsorLama['name'] == $this->request->getVar('name')) {
            $ruleNama = 'required';
        } else {
            $ruleNama = 'required|is_unique[sponsor.name]';
        }
        if (!$this->validate([
            'sponsorName' => [
                'rules' => $ruleNama,
                'errors' => [
                    'required' => '{field} Nama Sponsor harus diisi',
                    'is_unique' => '{field} Sponsor tersebut sudah terdaftar'
                ],
                'sponsorBrosur' => [
                    'rules' => 'uploaded[sponsorBrosur]|max_size[sponsorBrosur,1024]|is_image[sponsorBrosur]|mime_in[sponsorBrosur,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar untuk Brosur ',
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Pilih Gambar la',
                        'mime_in'  => 'Pilih Gambar dong'
                    ]
                ],
                'sponsorBanner' => [
                    'rules' => 'uploaded[sponsorBrosur]|max_size[sponsorBrosur,1024]|is_image[sponsorBrosur]|mime_in[sponsorBrosur,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar untuk Brosur ',
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Pilih Gambar la',
                        'mime_in'  => 'Pilih Gambar dong'
                    ]
                ],
                'sponsorLogo' => [
                    'rules' => 'uploaded[sponsorBrosur]|max_size[sponsorBrosur,1024]|is_image[sponsorBrosur]|mime_in[sponsorBrosur,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar untuk Brosur ',
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Pilih Gambar la',
                        'mime_in'  => 'Pilih Gambar dong'
                    ]
                ]
            ]
        ])) {
            //     $validation = \Config\Services::validation();
            //     return redirect()->to('/admin/edit/' . $this->request->getVar('description'))->withInput()->with('validation', $validation);
            return redirect()->to('/admin/edit/' . $this->request->getVar('description'))->withInput();
        }

        $fileBrosur = $this->request->getFile('brosur');
        $fileLogo = $this->request->getFile('sponsor_logo');
        $fileBanner = $this->request->getFile('sponsor_banner');

        // cek gambar, apakah tetap gambar brosur lama
        if ($fileBrosur->getError() == 4) {
            $namaBrosur = $this->request->getVar('brosurLama');
        } else {
            $namaBrosur = $fileBrosur->getName();
            $fileBrosur->move('assets/photos/sponsor/', $namaBrosur);
            unlink('assets/photos/sponsor/' . $this->request->getVar('brosurLama'));
        }

        // cek gambar, apakah tetap gambar banner lama
        if ($fileBanner->getError() == 4) {
            $namaBanner = $this->request->getVar('bannerLama');
        } else {
            $namaBanner = $fileBanner->getName();
            $fileBanner->move('assets/photos/sponsor/banner/', $namaBanner);
            unlink('assets/photos/sponsor/banner/' . $this->request->getVar('bannerLama'));
        }

        // cek gambar, apakah tetap gambar logo lama
        if ($fileLogo->getError() == 4) {
            $namaLogo = $this->request->getVar('logoLama');
        } else {
            $namaLogo = $fileLogo->getName();
            $fileLogo->move('assets/photos/sponsor/', $namaLogo);
            unlink('assets/photos/sponsor/logo/' . $this->request->getVar('logoLama'));
        }

        $description = url_title($this->request->getVar('sponsorName'), '-', true);
        // insert data Sponsor
        $this->sponsor->insert([
            'name' => $this->request->getVar('sponsorName'),

            'description'
            => $description,

            'phoneNumber'
            => $this->request->getVar('sponsorPhone'),

            'video'
            => $this->request->getVar('sponsorVideo'),

            'brosur'
            => $namaBrosur,

            'sponsor_banner'
            => $namaBanner,

            'sponsor_logo'
            => $namaLogo
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');
        return redirect()->to('/Admin');
        // $checkData =  $this->sponsor->findAll();
    }




    // --------------------------------------------------------------------

}
