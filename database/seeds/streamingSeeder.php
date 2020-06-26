<?php

use Illuminate\Database\Seeder;
use App\Models\Streaming;

class streamingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $streamings = [
            [
                'judul' => 'Talkshow 1',
                'deskripsi' => 'deskripsi',
                'foto' => 'IMG_9900.JPG',
                'link' => 'https://www.youtube.com/',
                'tanggal_tayang' => date('Y/m/d')
            ],
            [
                'judul' => 'Talkshow 2',
                'deskripsi' => 'deskripsi',
                'foto' => 'IMG_9903.JPG',
                'link' => 'https://www.youtube.com/',
                'tanggal_tayang' => date('Y/m/d')
            ],
            [
                'judul' => 'Penjurian',
                'deskripsi' => 'deskripsi',
                'foto' => '_DSC0189.JPG',
                'link' => 'https://www.youtube.com/',
                'tanggal_tayang' => date('Y/m/d')
            ]
        ];
        foreach($streamings as $streaming){
            Streaming::create($streaming);
        };
    }
}
