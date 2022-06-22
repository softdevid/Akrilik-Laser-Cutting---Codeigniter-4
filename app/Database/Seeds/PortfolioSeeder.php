<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul_produk'  => 'SMK YPT 1 PURBALINGGA',
                'slug' => 'smk-ypt-1-purbalingga',
                'gambar'    => 'desain3.jpeg',
                'lokasi' => 'Jl. Mayjen Sungkono No. Km.3, Selabaya, Kec. Kalimanah, Kab. Purbalingga',
                'jenis_produk'  => '1',
                'client'  => 'SMK YPT 1 PURBALINGGA',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul_produk'  => 'FOTO BALI',
                'slug' => 'foto-bali',
                'gambar'    => '3.png',
                'lokasi' => 'Jl. Letnan Suparto, Purbalingga, Purbalingga Lor, Kec. Purbalingga, kab. Purbalingga',
                'jenis_produk'  => '1l',
                'client'  => 'FOTO STUDIO BALI',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul_produk'  => 'NEON BOX SMK',
                'slug' => 'neon-box-smk',
                'gambar'    => 'neonbox.jpg',
                'lokasi' => 'Jl. Mayjen Sungkono, Selabaya, Kec. Kalimanah, Kab. Purbalingga',
                'jenis_produk'  => '2',
                'client'  => 'SMK NEGERI 1 PURBALINGGA',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul_produk'  => 'Web instansi',
                'slug' => 'web-instansi',
                'gambar'    => 'web.png',
                'lokasi' => 'Kalikabong, Kec. Kalimanah, Kabupaten Purbalingga',
                'jenis_produk'  => '4',
                'client'  => 'CV. Mekar Cutting Digital',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO team (gambar, lokasi. gambar, created_at, updated_at) VALUES(:gambar:, :lokasi:, :gambar:, :created_at:, :updated_at:)', $djenis_produk
        // Using Query Builder
        // $this->db->table('team')->insert($data);
        $this->db->table('portfolio')->insertBatch($data);
    }
}
