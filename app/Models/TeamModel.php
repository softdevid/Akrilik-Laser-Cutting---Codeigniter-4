<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'team';
    protected $allowedFields = ['nama', 'jabatan', 'gambar'];
    protected $primaryKey = 'id';


    public function getTeam($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->Where(['id' => $id])->first();
        }
    }
}
