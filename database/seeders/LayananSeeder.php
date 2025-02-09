<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanans = [
            [
                'name' => 'Pengembangan Aplikasi Web Full-Stack',
                'deskripsi' => 'Saya menyediakan layanan pengembangan aplikasi web full-stack menggunakan teknologi seperti Laravel, React.js, dan MySQL. Dengan pengalaman dalam membangun berbagai aplikasi, mulai dari sistem pendataan hingga company profile, saya dapat merancang dan mengembangkan solusi berbasis web yang responsif, cepat, dan user-friendly sesuai kebutuhan bisnis Anda.',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fcoding.svg?alt=media&token=af771280-8518-4275-a9bc-f5c22c1ac492',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Pengujian dan Quality Assurance (QA) Aplikasi',
                'deskripsi' => 'Saya menawarkan layanan pengujian perangkat lunak (Quality Assurance) untuk memastikan aplikasi berjalan dengan optimal dan bebas dari bug. Dengan pengalaman sebagai QA intern di PT Petrokimia Gresik, saya dapat melakukan pengujian manual maupun otomatis, mengidentifikasi celah keamanan, serta meningkatkan performa dan stabilitas aplikasi Anda.',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fqa.svg?alt=media&token=e53ecf78-567c-4ca5-9779-4f76aa423e05',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Pengembangan Kecerdasan Buatan (AI) untuk Deteksi dan Otomasi',
                'deskripsi' => 'Saya memiliki keahlian dalam pengembangan model kecerdasan buatan (AI), khususnya di bidang machine learning dan deep learning. Salah satu proyek saya adalah membangun model Convolutional Neural Network (CNN) untuk mendeteksi penyakit tanaman padi dengan akurasi tinggi. Layanan ini dapat diterapkan untuk kebutuhan lain seperti analisis data, deteksi objek, dan otomatisasi berbasis AI.',
                'icon' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2FLogo%2Fai.svg?alt=media&token=145cb65b-f1fd-4e95-8f3a-867034718638',
                'kd_status' => 'KS1',
            ],
        ];
        foreach ($layanans as $layanan) {
            Layanan::create($layanan);
        }
    }
}
