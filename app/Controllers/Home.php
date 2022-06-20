<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()

    {
        $data = [
            'title' => 'HOME',
        ];
        return view('home/index', $data);
    }
    public function services()

    {
        $data = [
            'title' => 'SERVICES'
        ];
        return view('home/services', $data);
    }
    public function talk()

    {
        $data = [
            'title' => 'LETS TALK'
        ];
        return view('home/lets-talk', $data);
    }
    public function portfolio()

    {
        $data = [
            'title' => 'PORTFOLIO'
        ];
        return view('home/portfolio', $data);
    }
    public function blog()

    {
        $data = [
            'title' => 'BLOG'
        ];
        return view('home/blog', $data);
    }
}
