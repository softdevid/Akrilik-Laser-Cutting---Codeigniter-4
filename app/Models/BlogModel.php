<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $allowedFields = ['blog_title', 'blog_description', 'image'];
    protected $primaryKey = 'id';


    public function getBlog($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->Where(['id' => $id])->first();
        }
    }
}