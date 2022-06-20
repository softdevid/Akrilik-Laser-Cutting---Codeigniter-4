<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function pembuatan_website()

    {
        $data = [
            'title' => 'Pembuatan Website'
        ];
        return view('services/pembuatan-website', $data);
    }
}
