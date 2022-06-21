<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Blog'
        ];
        return view('admin/blog');
    }
}