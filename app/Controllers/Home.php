<?php

namespace App\Controllers;

use App\Models\PortfolioModel;

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
        $model = new PortfolioModel();
        $data = [
            'title' => 'PORTFOLIO',
            'portfolio' => $model->getPortfolio()
        ];
        return view('home/portfolio', $data);
    }
    public function blog()

    {
        $data = [
            'title' => 'BLOG',
        ];
        return view('home/blog', $data);
    }
}
