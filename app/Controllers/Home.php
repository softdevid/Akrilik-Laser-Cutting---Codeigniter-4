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
}