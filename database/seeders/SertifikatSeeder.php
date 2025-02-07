<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sertifikat;

class SertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sertifikats = [
            [
                'name' => 'Memulai Pemrograman dengan Python',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Kelas ditujukan bagi pemula yang ingin belajar dasar pemrograman Python dengan mengacu pada standar industri.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2FMemulai%20Pemrograman%20dengan%20Python.png?alt=media&token=d309f008-5898-443f-81f1-9f73e846c47f',
                'link' => 'https://drive.google.com/file/d/1rkZRhe8m6Cmr_s3S_4zn9Oi4zr_Pm2E7/preview',
                'start_date' => '2024-09-23',
                'completion_date' => '2027-09-23',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Belajar Dasar Visualisasi Data',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Kelas ditujukan bagi pemula yang ingin memulai karirnya di bidang pengolahan data dengan mengacu pada standar kompetensi industri.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2FBelajar%20Dasar%20Visualisasi%20Data.png?alt=media&token=b1136d21-7a42-4679-92c2-5db0426237e9',
                'link' => 'https://drive.google.com/file/d/14UC-dMFuLsMYztg0Mc_GSvL1bX2ARPBV/preview',
                'start_date' => '2024-09-18',
                'completion_date' => '2027-09-18',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Belajar Machine Learning untuk Pemula',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Kelas ini dirancang untuk pemula yang ingin memulai karier di bidang Machine Learning dengan mengikuti standar kompetensi industri terkini.Kelas ini dirancang untuk pemula yang ingin memulai karier di bidang Machine Learning dengan mengikuti standar kompetensi industri terkini.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2FBelajar%20Machine%20Learning%20untuk%20Pemula.png?alt=media&token=232cdd48-c55c-494a-a3e0-5bc61533e8ad',
                'link' => 'https://drive.google.com/file/d/1CcTtDCJ6_yuX3ThjCwlzXKYQ9sJyPxcx/preview',
                'start_date' => '2024-09-18',
                'completion_date' => '2027-09-18',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Belajar Dasar AI',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Kelas ini ditujukan untuk pemula yang ingin memulai karier di dunia AI.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2FBelajar%20Dasar%20AI.png?alt=media&token=e8bc21f9-efdd-416f-bcc8-14173dd7bdb2',
                'link' => 'https://drive.google.com/file/d/16YEooqYKAi3OusGOykt7Lcbd1JJbBMBC/preview',
                'start_date' => '2024-09-19',
                'completion_date' => '2027-09-19',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Web Developer',
                'pihak' => 'Badan Nasional Sertifikasi Profesi',
                'deskripsi' => 'Web Developer merupakan salah satu Skema Pelatihan yang berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI) dengan skema Web Developer. Peserta pelatihan Web Developer akan mampu membangun dan mengelola aplikasi berbasis web dengan bahasa pemrograman.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2FUPA%2Fbnsp%20(1).png?alt=media&token=89b2d2ab-8d25-405d-822a-a58b594a4fa6',
                'link' => 'https://drive.google.com/file/d/11m52mRsZtlXkXiTqrsPqMy0QrclOR2C2/preview',
                'start_date' => '2024-06-24',
                'completion_date' => '2027-06-24',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Bootcamp Data Analyst with SQL dan Python',
                'pihak' => 'DQlab',
                'deskripsi' => 'Mempelajari Variabel dan tipe data, operator matematika, serta string functions and methods',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdqlab%2Fdqlab%20sql%20dan%20python%20(1).png?alt=media&token=d792e4d4-ad8d-47ce-83d4-0a9e12bde4a4',
                'link' => 'https://drive.google.com/file/d/1nvq8bBuSNUxZRehHfQ-GKzCW_esV9jGy/preview',
                'start_date' => '2024-09-19',
                // 'completion_date' => 'null',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Bootcamp Machine learning dan AI for Beginner',
                'pihak' => 'DQlab',
                'deskripsi' => 'Mempelajari Data Preprocessing and Cleaning',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdqlab%2Fdqlab%20mldanai%20(1).png?alt=media&token=0c0c900e-a7cb-4873-b329-6cd65cf46441',
                'link' => 'https://drive.google.com/file/d/1qQvYUV8Q9N8FO3K9KszgikY_auOwa01J/preview',
                'start_date' => '2024-09-19',
                // 'completion_date' => 'null',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Microsoft Office',
                'pihak' => 'UPA Politeknik Negeri Jember',
                'deskripsi' => 'Tes Sertifikasi Microsoft office meliputi : Microsoft Word, Microsoft Excel dan Microsoft Power Point',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2FUPA%2Fmicrosoft%20UPA%20(1).png?alt=media&token=00f1857d-89c4-45a1-927b-1e7d6c537dac',
                'link' => 'https://drive.google.com/file/d/1TQUKmaDox3Tcv4Bb4gmVeLe8mtgsRUyi/preview',
                'start_date' => '2024-09-19',
                // 'completion_date' => '2027-09-19',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'ENGLISH PROFICIENCY TEST (EPT)',
                'pihak' => 'UPA Politeknik Negeri Jember',
                'deskripsi' => 'Tes Sertifikasi Bahasa Inggris meliputi : Listening, Grammar, Vocabulary dan Reading',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2FUPA%2Fept%20(1).png?alt=media&token=5c622fcc-63fa-400c-a3d2-3feb7b5c2c5c',
                'link' => 'https://drive.google.com/file/d/1FzSjJQRTmRCfk1eONquISBXfxPVZ654w/preview',
                'start_date' => '2024-09-19',
                // 'completion_date' => '2027-09-19',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Belajar Dasar Pemrograman JavaScript',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Kelas ini ditujukan untuk individu yang ingin melangkah menjadi seorang Web Developer/Back-end developer menggunakan teknologi Node.js menggunakan standar kompetensi industri yang divalidasi oleh AWS.',
                'image' => '',
                'link' => 'https://drive.google.com/file/d//preview',
                'start_date' => '2023-02-07',
                'completion_date' => '2026-02-07',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Memulai Pemrograman Dengan Java',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Kelas ini ditujukan untuk pemula yang ingin mempelajari dasar pemrograman bahasa Java dengan mengacu pada standar industri.',
                'image' => '',
                'link' => 'https://drive.google.com/file/d//preview',
                'start_date' => '2023-02-07',
                'completion_date' => '2026-02-07',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Memulai Pemrograman Dengan Kotlin',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Kelas ini ditujukan bagi yang ingin belajar dasar bahasa pemrograman Kotlin dengan mengacu pada standar kompetensi internasional milik Google Developers Authorized Training Partner',
                'image' => '',
                'link' => 'https://drive.google.com/file/d//preview',
                'start_date' => '2023-02-07',
                'completion_date' => '2026-02-07',
                'kd_status' => 'KS1',
            ],
            // [
            //     'name' => '',
            //     'pihak' => '',
            //     'deskripsi' => '',
            //     'image' => '',
            //     'link' => 'https://drive.google.com/file/d//preview',
            //     'start_date' => '2024-09-19',
            //     'completion_date' => '2027-09-19',
            //     'kd_status' => 'KS1',
            // ],
            // [
            //     'name' => '',
            //     'pihak' => '',
            //     'deskripsi' => '',
            //     'image' => '',
            //     'link' => 'https://drive.google.com/file/d//preview',
            //     'start_date' => '2024-09-19',
            //     'completion_date' => '2027-09-19',
            //     'kd_status' => 'KS1',
            // ],
            // [
            //     'name' => '',
            //     'pihak' => '',
            //     'deskripsi' => '',
            //     'image' => '',
            //     'link' => 'https://drive.google.com/file/d//preview',
            //     'start_date' => '2024-09-19',
            //     'completion_date' => '2027-09-19',
            //     'kd_status' => 'KS1',
            // ],
            // [
            //     'name' => '',
            //     'pihak' => '',
            //     'deskripsi' => '',
            //     'image' => '',
            //     'link' => 'https://drive.google.com/file/d//preview',
            //     'start_date' => '2024-09-19',
            //     'completion_date' => '2027-09-19',
            //     'kd_status' => 'KS1',
            // ],
            
        ];

        foreach ($sertifikats as $sertifikat) {
            Sertifikat::create($sertifikat);
        }
    }
}
