<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    
    {
        $data = [
            'title' => 'HOME | MEKAR LASER CUTTING DIGITAL'
        ];
        return view('home/index', $data);
    }
    public function services()
    
    {
        $data = [
            'title' => 'SERVICES | MEKAR LASER CUTTING DIGITAL'
        ];
        return view('home/services', $data);
    }
    public function talk()
    
    {
        $data = [
            'title' => 'LETS TALK | MEKAR LASER CUTTING DIGITAL'
        ];
        return view('home/lets-talk', $data);
    }
    public function portfolio()
    
    {
        $data = [
            'title' => 'PORTFOLIO | MEKAR LASER CUTTING DIGITAL'
        ];
        return view('home/portfolio', $data);
    }
    public function blog()
    
    {
        $data = [
            'title' => 'BLOG | MEKAR LASER CUTTING DIGITAL'
        ];
        return view('home/blog', $data);
    }
}