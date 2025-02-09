<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keahlian;
use Illuminate\Support\Facades\DB;

class KeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keahlians = [
                /*** Softskills.*/
            [
                'name' => 'Komunikasi Efektif',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],
            [
                'name' => 'Kerja sama Tim',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],
            [
                'name' => 'Pemecahan Masalah',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],
            [
                'name' => 'Adaptif',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],
            [
                'name' => 'Kemampuan Belajar Cepat',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],
            /*** Hardskills.*/
            [
                'name' => 'PHP',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fphp.svg?alt=media&token=d1be5f7d-76e2-4bba-9f88-f4b1b5b8510d',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Laravel',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Flaravel.svg?alt=media&token=116f84e3-2074-49d8-8a68-1c3b42972d13',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'React.js',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Freact.svg?alt=media&token=73d0fd83-6d70-433e-93a6-bb968e3d3080',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Python',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fpython.svg?alt=media&token=335d6209-f075-4b38-bfaa-84d42e1505b1',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'TensorFlow',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Ftensorflow.svg?alt=media&token=805d2259-a678-4c00-a734-30a2d800aed6',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Flask',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fflask.svg?alt=media&token=e6ff2f6e-877f-40df-acc3-2881e185a705',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'MySQL',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fmysql.svg?alt=media&token=057aeaa0-c46f-4112-91a9-180b40a77b9b',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'PostgreSQL',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fpostgresql.svg?alt=media&token=88fab4f5-cac2-4bc6-887f-03e32254e640',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Bootstrap',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fbootstrap.svg?alt=media&token=dec49bef-7a4d-4ce6-b34e-a6f7704aac9d',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Git',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fgit.svg?alt=media&token=b93dc8a2-d7f1-4f19-8b98-b0fae3c57a1e',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Github',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fgithub.svg?alt=media&token=c56c7b68-727c-45e6-8f1a-235cbe2247e8',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
        ];

        foreach ($keahlians as $keahlian) {
            Keahlian::create($keahlian);
        }
    }
}