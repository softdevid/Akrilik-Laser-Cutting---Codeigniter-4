<?php

namespace App\Controllers;

use App\Models\PortfolioModel;

use App\Models\BlogModel;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/dashboard', $data);
    }
}
