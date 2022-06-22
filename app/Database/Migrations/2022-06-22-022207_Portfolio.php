<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Portfolio extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lokasi' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_produk' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'client' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('portfolio');
    }

    public function down()
    {
        $this->forge->dropTable('portfolio');
    }

    /*
        1 = huruf timbul,
        2 = neon box,
        3 = papan reklame
        4 = digital creative
        5 = prototype IOT
    */
}
