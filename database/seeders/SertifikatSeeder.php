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
                'name' => 'Web Developer',
                'pihak' => 'Badan Nasional Sertifikasi Profesi',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah memenuhi standar kompetensi sebagai Web Developer, sesuai dengan ketentuan Badan Nasional Sertifikasi Profesi (BNSP).
                                 Pemegang sertifikat ini telah diuji dan dinyatakan kompeten dalam:
                                    • Pengembangan dan pemeliharaan website sesuai standar industri.
                                    • Implementasi teknologi front-end dan back-end.
                                    • Optimasi performa, keamanan, dan aksesibilitas web.
                                    • Penggunaan alat dan framework sesuai kebutuhan proyek.
                                Sertifikat ini menjadi bukti keahlian dan profesionalisme dalam bidang pengembangan web.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2FUPA%2Fsertifbnsp.webp?alt=media&token=39748c6f-de0f-487a-be00-f83588ad94c9',
                'link' => 'https://drive.google.com/file/d/11m52mRsZtlXkXiTqrsPqMy0QrclOR2C2/preview',
                'start_date' => '2024-06-01',
                'completion_date' => '2027-06-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Microsoft Office',
                'pihak' => 'UPA Politeknik Negeri Jember',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikanpelatihan dan dinyatakan kompeten dalam Microsoft Office melalui UPA Politeknik Negeri Jember. Pemegang sertifikat menguasai penggunaan Microsoft Word, Excel, dan PowerPoint untuk keperluan administrasi, analisis data, dan presentasi profesional. ',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2FUPA%2Fmicrosoft.webp?alt=media&token=04fd25bb-b081-4154-907b-f1778e2891f9',
                'link' => 'https://drive.google.com/file/d/1TQUKmaDox3Tcv4Bb4gmVeLe8mtgsRUyi/preview',
                'start_date' => '2024-05-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'English Proficiency Test (EPT)',
                'pihak' => 'UPA Politeknik Negeri Jember',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah mengikuti dan menyelesaikan English Proficiency Test (EPT) di UPA Politeknik Negeri Jember. Sertifikat ini menjadi bukti kemampuan dalam memahami dan menggunakan bahasa Inggris, mencakup aspek Listening, Grammar, Vocabulary dan Reading, sesuai dengan standar yang ditetapkan.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2FUPA%2Fsertifept.webp?alt=media&token=63615d30-76a9-4392-9d63-def671fd438a',
                'link' => 'https://drive.google.com/file/d/1FzSjJQRTmRCfk1eONquISBXfxPVZ654w/preview',
                'start_date' => '2024-04-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Surat Keterangan Selesai Magang',
                'pihak' => 'PT. Petrokimia Gresik',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program magang di PT. Petrokimia Gresik. Selama magang, pemegang sertifikat telah menjalankan tugas sesuai bidangnya, mengembangkan keterampilan teknis dan profesional, serta berkontribusi dalam kegiatan perusahaan. Sertifikat ini menjadi bukti pengalaman kerja dan kompetensi yang diperoleh selama magang.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fmagang%2Fsertifmagang.webp?alt=media&token=1cc8a33d-d4a8-4cb1-9019-119c4e7f66c5',
                'link' => 'https://drive.google.com/file/d/1N8PJF8d1r6N7VMdQMn1FG6i7MSkcM349/preview',
                'start_date' => '2023-12-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Belajar Dasar AI',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Belajar Dasar AI di Dicoding Indonesia. Pemegang sertifikat telah memahami konsep dasar Artificial Intelligence (AI), termasuk machine learning, deep learning, serta penerapannya dalam berbagai bidang. Sertifikat ini menjadi bukti kompetensi dalam memahami dan mengembangkan teknologi AI dasar.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2Fdicoding%20(5).webp?alt=media&token=90c54a39-8a93-4de0-ac31-3b6d3a6a2bd4',
                'link' => 'https://drive.google.com/file/d/16YEooqYKAi3OusGOykt7Lcbd1JJbBMBC/preview',
                'start_date' => '2024-09-01',
                'completion_date' => '2027-09-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Belajar Machine Learning untuk Pemula',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Belajar Machine Learning untuk Pemula di Dicoding Indonesia. Pemegang sertifikat telah memahami dasar-dasar machine learning, termasuk pengolahan data, model prediktif, dan implementasi algoritma dasar. Sertifikat ini menjadi bukti kompetensi awal dalam pengembangan solusi berbasis AI dan machine learning.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2Fdicoding%20(2).webp?alt=media&token=0e9be97c-98e4-416d-bfaa-68e874d11028',
                'link' => 'https://drive.google.com/file/d/1CcTtDCJ6_yuX3ThjCwlzXKYQ9sJyPxcx/preview',
                'start_date' => '2024-09-01',
                'completion_date' => '2027-09-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Memulai Pemrograman dengan Python',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Memulai Pemrograman dengan Python di Dicoding Indonesia. Pemegang sertifikat telah memahami dasar-dasar pemrograman Python, termasuk sintaks dasar, struktur data, fungsi, dan implementasi program sederhana. Sertifikat ini menjadi bukti kompetensi dalam pemrograman menggunakan Python.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2Fdicoding%20(6).webp?alt=media&token=c86b75aa-2bb2-49e8-a663-16ec4e543238',
                'link' => 'https://drive.google.com/file/d/1rkZRhe8m6Cmr_s3S_4zn9Oi4zr_Pm2E7/preview',
                'start_date' => '2024-09-01',
                'completion_date' => '2027-09-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Belajar Dasar Visualisasi Data',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Belajar Dasar Visualisasi Data di Dicoding Indonesia. Pemegang sertifikat telah menguasai konsep dasar visualisasi data, termasuk penggunaan alat dan teknik untuk menyajikan data secara efektif menggunakan grafik dan chart. Sertifikat ini menjadi bukti kemampuan dalam mengkomunikasikan informasi data melalui visualisasi yang jelas dan menarik.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2Fdicoding%20(1).webp?alt=media&token=f85840de-b17b-4372-b106-ddbc5708cb57',
                'link' => 'https://drive.google.com/file/d/14UC-dMFuLsMYztg0Mc_GSvL1bX2ARPBV/preview',
                'start_date' => '2024-09-01',
                'completion_date' => '2027-09-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Belajar Dasar Pemrograman JavaScript',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Belajar Dasar Pemrograman JavaScript di Dicoding Indonesia. Pemegang sertifikat telah memahami dasar-dasar JavaScript, termasuk sintaks, struktur kontrol, fungsi, dan manipulasi DOM untuk pengembangan web. Sertifikat ini menjadi bukti kompetensi dalam pemrograman menggunakan JavaScript.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2Fdicoding%20(7).webp?alt=media&token=9bd09851-3182-4ca5-99a0-dce818d0c093',
                'link' => 'https://drive.google.com/file/d/1v_BViE2Ry74B5FtZbrLI-xAUBH_0aI-Q/preview',
                'start_date' => '2023-02-01',
                'completion_date' => '2026-02-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Memulai Pemrograman dengan Kotlin',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Memulai Pemrograman dengan Kotlin di Dicoding Indonesia. Pemegang sertifikat telah memahami dasar-dasar pemrograman Kotlin, termasuk sintaks, struktur data, dan pengembangan aplikasi menggunakan bahasa Kotlin. Sertifikat ini menjadi bukti kompetensi dalam pemrograman menggunakan Kotlin untuk pengembangan aplikasi.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2Fdicoding%20(3).webp?alt=media&token=56bb3987-eb05-4331-a7b9-1f3440c7fb03',
                'link' => 'https://drive.google.com/file/d/1eQJOHVQr4aG_nrHeoTomxG5y6Cjq5tqS/preview',
                'start_date' => '2023-02-01',
                'completion_date' => '2026-02-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Memulai Pemrograman dengan Java',
                'pihak' => 'Dicoding Indonesia',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Memulai Pemrograman dengan Java di Dicoding Indonesia. Pemegang sertifikat telah memahami dasar-dasar pemrograman Java, termasuk sintaks, struktur kontrol, objek dan kelas, serta pengembangan aplikasi berbasis Java. Sertifikat ini menjadi bukti kompetensi dalam pemrograman menggunakan Java.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdicoding%2Fdicoding%20(4).webp?alt=media&token=7d38c45f-6130-402d-930e-240454acc603',
                'link' => 'https://drive.google.com/file/d/1eJnt6Q090iburYjAN3EU8eaMXw5Hy49O/preview',
                'start_date' => '2023-02-01',
                'completion_date' => '2026-02-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Bootcamp Data Analyst with SQL and Python',
                'pihak' => 'DqLab',
                'deskripsi' => 'Bootcamp Data Analyst with SQL and Python Pemegang sertifikat telah menguasai keterampilan dasar dalam analisis data, menggunakan SQL untuk pengelolaan basis data dan Python untuk pemrograman data analitik.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdqlab%2Fdqlab-1.webp?alt=media&token=8d42caf4-6815-45b1-8b7c-b893721450d5',
                'link' => 'https://drive.google.com/file/d/1nvq8bBuSNUxZRehHfQ-GKzCW_esV9jGy/preview',
                'start_date' => '2024-08-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Bootcamp Machine Learning and AI for Beginners',
                'pihak' => 'DqLab',
                'deskripsi' => 'Bootcamp Machine Learning and AI for Beginners Pemegang sertifikat juga telah mempelajari konsep dasar Machine Learning dan Artificial Intelligence, serta penerapannya untuk menyelesaikan masalah analitik menggunakan algoritma dasar.Sertifikat ini menjadi bukti kompetensi dalam analisis data serta pengembangan solusi berbasis Machine Learning dan AI.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fdqlab%2Fdqlab.webp?alt=media&token=47a1b53c-05f1-490d-931b-fb8966932280',
                'link' => 'https://drive.google.com/file/d/1qQvYUV8Q9N8FO3K9KszgikY_auOwa01J/preview',
                'start_date' => '2024-08-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat Asisten Mentor',
                'pihak' => 'Ruang Guru',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah berperan sebagai Asisten Mentor dalam program Ruang Guru. Pemegang sertifikat telah berhasil membimbing dan memberikan dukungan kepada peserta dalam memahami materi, menyelesaikan tugas, serta meningkatkan keterampilan belajar. Sertifikat ini menjadi bukti kontribusi dalam menciptakan pengalaman belajar yang efektif dan mendukung kesuksesan peserta.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fr.guru%2Fsertifikatasmen.webp?alt=media&token=a9985428-9ada-46a4-8ea3-1159267e2105',
                'link' => 'https://drive.google.com/file/d/1EX5O5fDgpVh85vMtyh9qaLTja1IkC4p2/preview',
                'start_date' => '2023-07-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat MSIB – Frontend Engineering',
                'pihak' => 'Ruang Guru dan Kampus Merdeka',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program MSIB Frontend Engineering yang diselenggarakan oleh Ruang Guru dan Kampus Merdeka. Pemegang sertifikat telah menguasai keterampilan Frontend Engineering, termasuk HTML, CSS, JavaScript, dan framework terkait, untuk membangun aplikasi web yang responsif dan interaktif. Sertifikat ini menjadi bukti kemampuan dalam pengembangan frontend dan penerapan teknologi web terkini.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fmsib%2Fsertifmsib.webp?alt=media&token=f131385f-3cf7-4195-b086-b822026cabe0',
                'link' => 'https://drive.google.com/file/d/1G2ygN8Cyg-cQT86mR8lFH4x2ILzv_apx/preview',
                'start_date' => '2023-06-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat MBKM',
                'pihak' => 'Politeknik Negeri Malang dan Politeknik Negeri Jember',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah mengikuti program MBKM Pertukaran Pelajar dalam mata kuliah Workshop Sistem Informasi Web Framework yang diselenggarakan oleh Politeknik Negeri Malang dan Politeknik Negeri Jember. Pemegang sertifikat telah memperoleh keterampilan dalam pengembangan sistem informasi menggunakan web framework seperti Laravel dan React.js, serta mengaplikasikan konsep konsep pengembangan web dalam proyek praktis. Sertifikat ini menjadi bukti kompetensi dalam pengembangan sistem informasi berbasis web menggunakan framework modern.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fmbkm%2Fsertifmbkm.webp?alt=media&token=dc559473-b679-48f7-9c1a-d4a8c59d9294',
                'link' => 'https://drive.google.com/file/d/1OAu-z2l_ApefV8nbGiwjm4faw08uTS2F/preview',
                'start_date' => '2022-08-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat General Competence',
                'pihak' => 'Ruang Guru',
                'deskripsi' => 'Sertifikat menyelesaikan ini diberikan kepada individu yang telah program General Competence yang diselenggarakan oleh Ruang Guru. Pemegang sertifikat ini telah mengembangkan keterampilan dasar yang mencakup berpikir kritis, komunikasi efektif, manajemen waktu, dan kemampuan menyelesaikan masalah. Sertifikat ini menjadi bukti kompetensi dalam mengelola tantangan profesional dan mendukung performa di berbagai bidang pekerjaan.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fr.camp%2Fr.camp%20(2).webp?alt=media&token=0c57c33e-dc81-4f0a-b27e-b3ae739cb971',
                'link' => 'https://drive.google.com/file/d/1T5FYZyiumxTh6S7uDEkl8DSjvjVSWX5n/preview',
                'start_date' => '2023-02-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat Software Engineering',
                'pihak' => 'Ruang Guru',
                'deskripsi' => 'Sertifikat menyelesaikan ini diberikan kepada individu yang telah program Software Engineering yang diselenggarakan oleh Ruang Guru. Pemegang sertifikat ini telah memperoleh pengetahuan dan keterampilan dalam desain, pengembangan, dan pemeliharaan perangkat lunak. Program ini mencakup metodologi pengembangan perangkat lunak, pemrograman, dan pengujian untuk memastikan aplikasi yang efisien, dapat diandalkan, dan mudah dipelihara. Sertifikat ini menjadi bukti kompetensi dalam rekayasa perangkat lunak dan penerapannya dalam industri teknologi.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fr.camp%2Fr.camp%20(6).webp?alt=media&token=6651f61e-6f6c-4ad6-a44d-1750bc0ccc6e',
                'link' => 'https://drive.google.com/file/d/15HSLDc8QI6ud4fn-Urnc3RWODkJCjyeT/preview',
                'start_date' => '2023-03-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat Pemrograman Frontend Dasar with JavaScript',
                'pihak' => 'Ruang Guru',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Pemrograman Frontend Dasar with JavaScript yang diselenggarakan oleh Ruang Guru. Pemegang sertifikat ini telah menguasai dasar-dasar pemrograman frontend, termasuk penggunaan HTML, CSS, dan JavaScript untuk membangun antarmuka pengguna yang interaktif dan responsif. Sertifikat ini menjadi bukti kompetensi dalam pengembangan web frontend dengan menggunakan JavaScript.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fr.camp%2Fr.camp%20(5).webp?alt=media&token=c2b2fcc2-4eaf-465a-8d2c-9fa904eade35',
                'link' => 'https://drive.google.com/file/d/16ZXSb0x2SZrtk9jzXefyrlZKlZyTTtnY/preview',
                'start_date' => '2023-03-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat Pemrograman Frontend Lanjutan with JavaScript',
                'pihak' => 'Ruang Guru',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Pemrograman Frontend Lanjutan with JavaScript yang diselenggarakan oleh Ruang Guru. Pemegang sertifikat ini telah menguasai konsep lanjutan dalam pengembangan frontend, termasuk penggunaan JavaScript untuk membangun aplikasi web yang kompleks. Sertifikat ini menjadi bukti kompetensi dalam menciptakan antarmuka pengguna dinamis dan interaktif menggunakan JavaScript tingkat lanjut.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fr.camp%2Fr.camp%20(4).webp?alt=media&token=69ea8d3b-6d80-41ac-9bf6-3c526e6471bd',
                'link' => 'https://drive.google.com/file/d/1YMRs85tmq0XOEKoMyU_1RFjw2tc3i0Vm/preview',
                'start_date' => '2023-04-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat Basic Frontend Development',
                'pihak' => 'Ruang Guru',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Basic Frontend Development yang diselenggarakan oleh Ruang Guru. Pemegang sertifikat ini telah memahami dasar-dasar pengembangan frontend, termasuk HTML, CSS, dan JavaScript, serta penerapannya dalam membangun halaman web statis yang responsif dan fungsional. Sertifikat ini menjadi bukti kemampuan dalam membangun antarmuka pengguna dasar dan menerapkan teknik-teknik frontend yang sesuai dengan standar industri.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fr.camp%2Fr.camp%20(1).webp?alt=media&token=d91faba4-4a7b-4068-ba3b-bb64021ddd8d',
                'link' => 'https://drive.google.com/file/d/1WhLYQreOF8Qvw1iblT69FIicf4BkxVD1/preview',
                'start_date' => '2023-05-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat Dasar Pemrograman Frontend dengan React',
                'pihak' => 'Ruang Guru',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Dasar Pemrograman Frontend dengan React yang diselenggarakan oleh Ruang Guru. Pemegang sertifikat ini telah menguasai dasar-dasar pengembangan frontend menggunakan React, termasuk komponen, state, props, dan manajemen alur data untuk membangun aplikasi web yang dinamis dan responsif. Sertifikat ini menjadi bukti kompetensi dalam membangun antarmuka pengguna yang interaktif menggunakan React.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fr.camp%2Fr.camp%20(3).webp?alt=media&token=d2a1b1ff-88e6-4c3b-ad04-b127ea7c0fd3',
                'link' => 'https://drive.google.com/file/d/1KWa2FGS1jfqgfaZSuuLsz-e9BOiIkr3C/preview',
                'start_date' => '2023-06-01',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Sertifikat Pemrograman Frontend dengan React Lanjutan',
                'pihak' => 'Ruang Guru',
                'deskripsi' => 'Sertifikat ini diberikan kepada individu yang telah menyelesaikan program Pemrograman Frontend dengan React Lanjutan yang diselenggarakan oleh Ruang Guru. Pemegang sertifikat ini telah menguasai konsep lanjutan dalam pengembangan frontend menggunakan React, termasuk penerapan Hooks, Context API, routing, dan integrasi dengan API eksternal untuk membangun aplikasi web yang kompleks dan efisien. Sertifikat ini menjadi bukti kompetensi dalam membangun aplikasi web dinamis dan skalabel menggunakan React tingkat lanjut.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fsertifikat%2Fr.camp%2Fr.camp%20(7).webp?alt=media&token=93d5c53b-7248-44ee-b2cc-18e28a7265f0',
                'link' => 'https://drive.google.com/file/d/133CyEy5wueDNzZaBlfhOv0psvNL29tTL/preview',
                'start_date' => '2023-06-01',
                'kd_status' => 'KS1',
            ],
        ];

        foreach ($sertifikats as $sertifikat) {
            Sertifikat::create($sertifikat);
        }
    }
}