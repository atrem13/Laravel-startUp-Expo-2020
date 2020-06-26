<?php

use Illuminate\Database\Seeder;
use App\Models\Tenant;
class tenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenants = [
            [
                "nama" => "Kostpedia",
                "deskripsi" => "penyedia jasa informasi kost di bali",
                "kategori_usaha" => "penyedia website, mobile apps, IT support",
                "foto" => "IMG_9999.JPG",
                "video" => "https://www.youtube.com/watch?v=UQqkac6C_aU",
                "link" => "https://www.kostpedia.id/",
                "score" => 0

            ],
            [
                "nama" => "Kostpedia",
                "deskripsi" => "penyedia jasa informasi kost di bali",
                "kategori_usaha" => "penyedia website, mobile apps, IT support",
                "foto" => "IMG_8518.JPG",
                "video" => "https://www.youtube.com/watch?v=UQqkac6C_aU",
                "link" => "https://www.kostpedia.id/",
                "score" => 0

            ],
            [
                "nama" => "Kostpedia",
                "deskripsi" => "penyedia jasa informasi kost di bali",
                "kategori_usaha" => "penyedia website, mobile apps, IT support",
                "foto" => "IMG_8488.JPG",
                "video" => "https://www.youtube.com/watch?v=UQqkac6C_aU",
                "link" => "https://www.kostpedia.id/",
                "score" => 0

            ]
        ];
        foreach($tenants as $tenant){
            Tenant::create($tenant);
        };
    }
}
