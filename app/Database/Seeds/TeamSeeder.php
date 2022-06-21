<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'    => 'deddy Suwito S.Kom',
                'jabatan' => 'Senior Software Enginer',
                'gambar'  => 'pakdedy.jpeg',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama'    => 'Ardianto Putra Pratomo',
                'jabatan' => 'Full-Stack Web Developer',
                'gambar'  => 'ardianto.jpeg',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama'    => 'Tresnanda Agsifa Cakra Buana',
                'jabatan' => 'Full-Stack Web Developer',
                'gambar'  => 'tresnanda.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO team (nama, jabatan. gambar, created_at, updated_at) VALUES(:nama:, :jabatan:, :gambar:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('team')->insert($data);
        $this->db->table('team')->insertBatch($data);
    }
}
