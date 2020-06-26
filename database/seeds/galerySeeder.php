<?php

use Illuminate\Database\Seeder;
use App\Models\Galery;

class galerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galerys = [
            [
                'nama' => 'Talkshow bersama para mentor',
                'foto' => 'IMG_8450-min.JPG'
            ],
            [
                'nama' => 'Pertunjukan musik',
                'foto' => 'IMG_8479-min.JPG'
            ],
            [
                'nama' => 'Para dancer yang unjuk kebolehan mereka',
                'foto' => 'IMG_8482-min.JPG'
            ],
            [
                'nama' => 'Salah satu startup yang sudah sukses dalam usahanya',
                'foto' => 'IMG_8496-min.JPG'
            ],
            [
                'nama' => 'Pengunjung antusias dengan produk yang ditampilkan',
                'foto' => 'IMG_8512-min.JPG'
            ],
            [
                'nama' => 'Tidak hanya produk digital yang tampil, barang jadi juga ada',
                'foto' => 'IMG_8522-min.JPG'
            ],
            [
                'nama' => 'Keramaian Startup Expo',
                'foto' => 'IMG_8560-min.JPG'
            ],
        ];
        foreach($galerys as $galery){
            Galery::create($galery);
        };
    }
}
