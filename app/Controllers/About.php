<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    
    {
        $data = [
            'title' => 'PROFILE'
        ];
        return view('about/profile', $data);
    }
    public function services()
    
    {
        $data = [
            'title' => 'TEAM'
        ];
        return view('about/team', $data);
    }
    public function talk()
    
    {
        $data = [
            'title' => 'WORK PHASE'
        ];
        return view('about/work-phase', $data);
    }
    public function portfolio()
    
    {
        $data = [
            'title' => 'SCOPE OF WORK'
        ];
        return view('about/sow', $data);
    }
    public function blog()
    
    {
        $data = [
            'title' => 'FAQ'
        ];
        return view('about/faq', $data);
    }
}