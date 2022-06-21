<?php

namespace App\Controllers;

// use CodeIgniter\Controller;
use App\Models\TeamModel;

class About extends BaseController
{
    public function profile()
    {
        $data = [
            'title' => 'PROFILE'
        ];
        return view('about/profile', $data);
    }

    public function team()
    {
        $model = new TeamModel();
        $data = [
            'title' => 'TEAM',
            'team' => $model->getTeam()
        ];
        return view('about/team', $data);
    }
    public function phase()

    {
        $data = [
            'title' => 'WORK PHASE'
        ];
        return view('about/work-phase', $data);
    }
    public function sow()

    {
        $data = [
            'title' => 'SCOPE OF WORK'
        ];
        return view('about/sow', $data);
    }
    public function faq()

    {
        $data = [
            'title' => 'FAQ'
        ];
        return view('about/faq', $data);
    }
}
