<?php

namespace App\Controllers;
use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data = [
            'title' => 'Blog',
            'blog' => $model->getBlog()
        ];
        return view('admin/blog', $data);
    }
}