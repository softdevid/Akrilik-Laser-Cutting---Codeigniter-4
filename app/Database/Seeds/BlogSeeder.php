<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'blog_title'    => 'neonbox',
                'blog_description' => 'ini adalah neonbox',
                'image'  => 'iot.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ]
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO team (nama, jabatan. gambar, created_at, updated_at) VALUES(:nama:, :jabatan:, :gambar:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('team')->insert($data);
        $this->db->table('blog')->insertBatch($data);
    }
}