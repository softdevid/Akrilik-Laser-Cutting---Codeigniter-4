<?php

namespace App\Controllers;

use App\Models\PortfolioModel;

use App\Models\BlogModel;

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
        $model = new BlogModel();
        $data = [
            'title' => 'BLOG',
            'blog' => $model->getBlog()
        ];
        return view('home/blog', $data);
    }
}
