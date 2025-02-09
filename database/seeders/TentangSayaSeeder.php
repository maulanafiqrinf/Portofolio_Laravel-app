<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TentangSaya;

class TentangSayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TentangSaya::create([
            'name' => 'Maulana Fiqri Nurul Fawaid',
            'email' => 'maulanafiqri42@gmail.com',
            'profesi' => 'Fullstack Developer | AI Enthusiast',
            'detail' =>'Lulusan dari Jurusan Teknologi Informasi,Program Studi Teknik Informatika, Politeknik Negeri Jember. Berpengalaman dalam pengembangan aplikasi web, dekstop dan pengujian kualitas perangkat lunak (QA), serta memiliki minat besar pada kecerdasan buatan, khususnya machine learning dan deep learning. 
                        
                        Saya antusias untuk terus belajar dan berkontribusi dalam menciptakan solusi teknologi yang inovatif.',
            'lokasi' => 'Tuban, Indonesia',
            'hp' => '082143078424',
            'foto' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Ffotome.webp?alt=media&token=c90e6cf7-0d56-45f8-9503-efb8e1b49e6f',
            'cv' => '-',
            'instagram' => 'https://instagram.com/johndoe',
            'linkedln' => 'https://linkedin.com/in/johndoe',
            'github' => 'https://github.com/johndoe',
            'link' => 'https://johndoe.com',
        ]);
    }
}