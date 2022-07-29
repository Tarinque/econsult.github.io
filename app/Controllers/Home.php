<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Forum Konsultasi Itjen'
        ];
        return view('/pages/login', $data);
    }

    public function menu()
    {
        $data = [
            'title' => 'Home'
        ];
        echo view('/pages/dashboard', $data);
    }

    public function topik()
    {
        $data = [
            'title' => 'Topik Besar'
        ];
        echo view('/pages/barangJasa', $data);
    }

    public function createPost()
    {
        $data = [
            'title' => 'Buat Postingan'
        ];
        echo view('/pages/createPost', $data);
    }
}
