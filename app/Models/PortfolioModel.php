<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table = 'portfolio';
    protected $allowedFields = ['judul_produk', 'slug', 'gambar', 'lokasi', 'jenis_produk', 'client'];
    protected $primaryKey = 'id';


    public function getPortfolio($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        } else {
            return $this->Where(['slug' => $slug])->first();
        }
    }
}
