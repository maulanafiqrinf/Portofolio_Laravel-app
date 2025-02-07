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
                'deskripsi' => '',
                'icon' => '',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],
            [
                'name' => 'Kerja sama Tim',
                'deskripsi' => '',
                'icon' => '',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],
            [
                'name' => 'Pemecahan Masalah',
                'deskripsi' => '',
                'icon' => '',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],
            [
                'name' => 'Adaptif',
                'deskripsi' => '',
                'icon' => '',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],
            [
                'name' => 'Kemampuan Belajar Cepat',
                'deskripsi' => '',
                'icon' => '',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK1',
            ],

            /*** Hardskills.*/
            [
                'name' => 'PHP',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2FPHP.png?alt=media&token=64737fec-3bee-420c-afd5-472abbb91926',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Laravel',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2FLaravel.png?alt=media&token=1ef20863-1ccd-4db3-889d-7a2da61bbadb',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'React.js',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2FReact.png?alt=media&token=df81336a-4b10-47a7-a497-ff67526d872c',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Python',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2FPython.png?alt=media&token=d47cc113-bbe9-4ba4-9597-3c4e9a468f03',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'TensorFlow',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2FTensorFlow.png?alt=media&token=c4c33096-f078-48cf-ae61-7292999dad67',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Flask',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2FFlask.png?alt=media&token=4737045b-c7e3-4aee-a680-30924a8f5f17',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'MySQL',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2FMySQL.png?alt=media&token=bd1611de-88fb-4ad0-9ca9-c3d3c0f987da',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'PostgreSQL',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2FPostgresSQL.png?alt=media&token=305fc78e-f2c1-4ad6-9ecf-3e58f362c15c',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Bootstrap',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fbootstrap.png?alt=media&token=9be42c59-aff4-40f0-9eb0-0dda9b90c7e1',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Git',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2FGit.png?alt=media&token=c00147ee-3cdc-4505-bce4-b7779790b726',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
            [
                'name' => 'Github ,',
                'deskripsi' => '',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fgithub.png?alt=media&token=2483d05d-78ec-4ee4-a9e9-28cda9611288',
                'kd_status' => 'KS1',
                'kd_kategori_keahlian' => 'KK2',
            ],
        ];

        foreach ($keahlians as $keahlian) {
            Keahlian::create($keahlian);
        }
    }
}