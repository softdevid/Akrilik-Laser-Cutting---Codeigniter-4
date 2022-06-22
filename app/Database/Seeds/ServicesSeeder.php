<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul_service'    => 'Pembuatan Website',
                'slug' => 'pembuatan-website',
                'jenis_service'  => '1',
                'gambar'  => 'web.jpg',
                'kutipan'  => 'Website menjadi fasilitas sangat penting untuk pemasaran dan scale up bisnis di era digital ini. Miliki sekarang!',
                'deskripsi' => 'Website menjadi fasilitas sangat penting untuk pemasaran dan scale up bisnis di era digital ini. Miliki sekarang!',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul_service'    => 'Pembuatan Aplikasi Dekstop',
                'slug' => 'pembuatan-aplikasi-dekstop',
                'jenis_service'  => '1',
                'gambar'  => 'dekstop.jpg',
                'kutipan'  => 'Aplikasi desktop adalah aplikasi yang berjalan di desktop atau
                                    laptop komputer pengguna, manfaat utama dari aplikasi desktop adalah efisiensi
                                    tinggi dan fleksibilitas antarmuka pengguna.',
                'deskripsi' => 'Aplikasi desktop adalah aplikasi yang berjalan di desktop atau
                                    laptop komputer pengguna, manfaat utama dari aplikasi desktop adalah efisiensi
                                    tinggi dan fleksibilitas antarmuka pengguna.',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul_service'    => 'Pembuatan Prototype IOT',
                'slug' => 'pembuatan-prototype-iot',
                'jenis_service'  => '1',
                'gambar'  => 'iot.jpg',
                'kutipan'  => 'Masa sekarang yang serba canggih yang membuat kita mengontrol dari
                                    jarak jauh. Perancangan IOT (Internet of Think)
                                    yang memberi kemudahan bagi kita di masa sekarang. Mudah dan fleksibel. Miliki
                                    sekarang!',
                'deskripsi' => 'Masa sekarang yang serba canggih yang membuat kita mengontrol dari
                                    jarak jauh. Perancangan IOT (Internet of Think)
                                    yang memberi kemudahan bagi kita di masa sekarang. Mudah dan fleksibel. Miliki
                                    sekarang!',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul_service'    => 'Produksi Papan Reklame',
                'slug' => 'pembuatan-papan-reklame',
                'jenis_service'  => '2',
                'gambar'  => 'reklame.jpg',
                'kutipan'  => 'Papan reklame, papan iklan, atau baliho merupakan salah satu media
                                    luar ruang yang memiliki tujuan menyampaikan pesan mengenai suatu produk atau jasa
                                    bahkan individu-individu yang ingin mendongkrak popularitas.',
                'deskripsi' => 'Papan reklame, papan iklan, atau baliho merupakan salah satu media
                                    luar ruang yang memiliki tujuan menyampaikan pesan mengenai suatu produk atau jasa
                                    bahkan individu-individu yang ingin mendongkrak popularitas.',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul_service'    => 'Produksi Neon Box',
                'slug' => 'pembuatan-neon-box',
                'jenis_service'  => '2',
                'gambar'  => 'neonbox.jpg',
                'kutipan'  => 'Neon box merupakan produk paling penting yang harus dimiliki setiap
                pengusaha baik pemula maupun profesional. Miliki sekarang!',
                'deskripsi' => 'Neon box merupakan produk paling penting yang harus dimiliki setiap
                pengusaha baik pemula maupun profesional. Miliki sekarang!',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul_service'    => 'Produksi huruf timbul',
                'slug' => 'pembuatan-huruf-timbul',
                'jenis_service'  => '2',
                'gambar'  => '/3.png',
                'kutipan'  => 'Huruf timbul kini menjadi bagian penting dalam Branding Offline.
                Banyaknya manfaat dan kegunaan menjadikan huruf timbul makin populer.',
                'deskripsi' => 'Huruf timbul kini menjadi bagian penting dalam Branding Offline.
                Banyaknya manfaat dan kegunaan menjadikan huruf timbul makin populer.',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ]
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO team (nama, jabatan. gambar, created_at, updated_at) VALUES(:nama:, :jabatan:, :gambar:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('team')->insert($data);
        $this->db->table('services')->insertBatch($data);
    }
}
