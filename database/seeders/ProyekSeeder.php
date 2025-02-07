<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyek;

class ProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proyeks = [
            [
                'name' => 'Freelance',
                'position' => 'FullStack Developer',
                'pihak' => 'Online',
                'technology' => '',
                'deskripsi' => '• Merancang dan membangun Aplikasi Portofolio Web.
                                • Mengembangkan Aplikasi SIPRODAK untuk pendataan produksi ikan. 
                                • Membangun Aplikasi Company Profile untuk produsen batik di Banyuwangi yaitu Batik Kinnara Kinnari. 
                                • Merancang dan membangun Aplikasi Koperasi Unit Desa.',
                'jobdesk' => '',
                'image' => '',
                'image2' => '',
                'image3' => '',
                'link' => '',
                'start_date' => '2024-11-01',
                // 'completion_date' => '2024-11-01',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT1',
            ],
            [
                'name' => 'PT. Petrokimia Gresik',
                'position' => 'FullStack Developer dan QA Intern',
                'pihak' => 'Gresik',
                'technology' => '',
                'deskripsi' => '• Mengembangkan dan memelihara antarmuka pengguna (UI) serta logika backend untuk website GOPG menggunakan Laravel.
                                • Mengimplementasikan logika dan konfigurasi yang efisien untuk mengoptimalkan kinerja aplikasi.
                                • Melaksanakan pengujian kualitas (QA) secara menyeluruh untuk memastikan aplikasi berfungsi dengan baik dan bebas bug.
                                • Menyusun dan mengelola dokumentasi proyek secara lengkap, termasuk BRD, Blueprint, PIR, dan User Manual.',
                'jobdesk' => '',
                'image' => '',
                'image2' => '',
                'image3' => '',
                'link' => '',
                'start_date' => '2023-08-01',
                'completion_date' => '2023-12-31',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT1',
            ],
            [
                'name' => 'Ruang Guru',
                'position' => 'Asisten Mentor - Program MSIB Front-End Engineering',
                'pihak' => 'Jakarta (Online)',
                'technology' => '',
                'deskripsi' => '• Membimbing peserta dalam menguasai konsep-konsep Front-End Engineering, mulai dari HTML, CSS, JavaScript, hingga framework seperti React.
                                • Mengevaluasi kemajuan peserta secara berkala dan memberikan umpan balik konstruktif untuk meningkatkan pemahaman mereka. 
                                • Memfasilitasi diskusi dan menjawab pertanyaan peserta terkait materi pembelajaran dengan cara yang jelas dan mendalam. ',
                'jobdesk' => '',
                'image' => '',
                'image2' => '',
                'image3' => '',
                'link' => '',
                'start_date' => '2023-02-01',
                'completion_date' => '2023-07-30',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT1',
            ],
            [
                'name' => 'GOPG',
                'position' => 'Fullstack Developer dan Quality Assurance Intern',
                'pihak' => 'PT. Petrokimia Gresik',
                'technology' => 'Laravel, CSS, Ajax, Websocket dan Postgresql',
                'deskripsi' => 'GOPG adalah aplikasi untuk melaporkan gratifikasi di internal perusahaan. Serta aplikasi ini berguna untuk menciptakan perusaan yang kondusif.',
                'jobdesk' => '• Mengembangkan UI/UX yang intuitif dan mudah digunakan untuk aplikasi pelaporan gratifikasi internal.
                              • Membangun backend yang kokoh menggunakan Laravel untuk mengelola data pelaporan dan memastikan keamanan data.
                              • Melakukan pengujian kualitas (QA) secara menyeluruh untuk memastikanaplikasi berfungsi dengan optimal dan bebas bug',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Fgopg%2Fimac-screen-mockup.png?alt=media&token=b5dac060-17e5-405f-b1ed-c3326c022cdc',
                'image2' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Fgopg%2Fflat-devices-mockup.png?alt=media&token=bfa090ce-d644-4546-bec1-4b56e58ede20',
                'image3' => '',
                'link' => '',
                'start_date' => '2023-08-01',
                'completion_date' => '2023-12-01',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'SIKAPADI',
                'position' => 'Fullstack Developer dan AI Engineer',
                'pihak' => '-',
                'technology' => 'Laravel, CSS, Ajax, Tensorflow, Python dan mysql',
                'deskripsi' => 'SIKAPADI adalah aplikasi untuk membantu petani di Tuban mendeteksi penyakit pada tanaman padi.',
                'jobdesk' => '• Membangun model Convolutional Neural Network (CNN) untuk mendeteksi berbagai jenis penyakit pada tanaman padi.
                              • Mengumpulkan dan mengolah dataset gambar tanaman padi yang sehat dan sakit untuk melatih model CNN.
                              • Mendesain dan mengembangkan aplikasi web yang user-friendly untuk memungkinkan petani mengunggah gambar tanaman mereka dan mendapatkan hasil diagnosis secara real-time menggunakan laravel.
                              • Mengintegrasikan model CNN ke dalam aplikasi web menggunakan framework deep learning seperti TensorFlow atau PyTorch.
                              • Mengimplementasikan algoritma CNN yang mencapai akurasi tinggi hingga 98,53% dalam mendeteksi penyakit tanaman padi. ',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Fsikapadi%2Fsikapadi.png?alt=media&token=c6d5c06e-1246-4301-9c9d-dd7724097923',
                'image2' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Fsikapadi%2Fsikapadi%20(2).png?alt=media&token=54561aec-74e5-4b05-94e4-2ae2acfff7e7',
                'image3' => '',
                'link' => '',
                'start_date' => '2023-01-01',
                'completion_date' => '2023-03-31',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'SIPRODAK',
                'position' => 'FullStack Developer Freelance',
                'pihak' => '-',
                'technology' => 'PHP, CSS, JavaScript dan Mysql',
                'deskripsi' => 'SIPRODAK adalah aplikasi untuk membantu pendataan produksi ikan.',
                'jobdesk' => '• Mengembangkan sistem backend menggunakan PHP, CSS, JavaScript, dan MySQL untuk mengelola data produksi ikan dan laporan produksi bulanan. 
                              • Mendesain dan membangun antarmuka pengguna (UI) yang intuitif dan mudah digunakan. 
                              • Mengimplementasikan database dengan MySQL untuk penyimpanan data yang terstruktur dan efisien. 
                              • Mengoptimalkan kecepatan loading halaman dan meningkatkan pengalaman pengguna secara keseluruhan. ',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2FSiprodak%2Fsiprodak%20(2).png?alt=media&token=aae21051-2801-4738-9f81-880c20246a6c',
                'image2' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2FSiprodak%2Fsiprodak%20(1).png?alt=media&token=808d68de-6c56-4af9-9d8e-7892a019a5f0',
                'image3' => '',
                'link' => '',
                'start_date' => '2024-11-01',
                'completion_date' => '2024-12-31',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'Faceto',
                'position' => 'Team Leader dan Fullstack Developer',
                'pihak' => '-',
                'technology' => 'Python, LBPH, Flask, JavaScript dan Mysql',
                'deskripsi' => 'FACETO Merupakan Aplikasi deteksi kehadiran berbasis wajah menggunakan algoritma seperti LBPH dan Haar Cascade.',
                'jobdesk' => '• Memimpin tim dalam merancang dan mengembangkan sistem deteksi kehadiran berbasis wajah menggunakan teknologi terkini seperti LBPH dan Haar Cascade.
                              • Merancang arsitektur sistem yang efisien dan skalabel, menggabungkan frontend yang responsif dengan backend yang kuat.
                              • Memimpin pengembangan fitur-fitur utama seperti registrasi wajah, verifikasi kehadiran, dan pelaporan data kehadiran.
                              • Memilih dan mengimplementasikan teknologi yang tepat, termasuk Flask sebagai micro-framework dan Python sebagai bahasa pemrograman backend.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Ffaceto%2Ffaceto.png?alt=media&token=977626e2-12f3-408e-9e6d-0c61fe5f8369',
                'image2' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Ffaceto%2Ffaceto%20(2).png?alt=media&token=b20bc81b-1e8e-40dd-838f-d2ad0ace408c',
                'image3' => '',
                'link' => '',
                'start_date' => '2022-09-01',
                'completion_date' => '2023-01-01',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'KUD (Koperasi Unit Desa)',
                'position' => 'FullStack Developer Freelance',
                'pihak' => '-',
                'technology' => 'PHP, CSS, JavaScript dan Mysql',
                'deskripsi' => 'KUD merupakan aplikasi ini digunakan untuk mengelola data anggota, transaksi simpan pinjam, laporan keuangan, dan fitur-fitur lainnya.',
                'jobdesk' => '• Membangun sistem backend yang kuat menggunakan PHP untuk mengelola data anggota, transaksi simpan pinjam, laporan keuangan, dan fitur-fitur lainnya. 
                              • Mendesain dan mengembangkan antarmuka pengguna yang intuitif dan mudah digunakan.
                              • Mengimplementasikan database Mysql untuk menyimpan data secara terstruktur dan efisien. 
                              • Membangun fitur-fitur seperti pendaftaran anggota, pengajuan pinjaman, pembayaran angsuran, dan pembuatan laporan.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Fkud%2Fkud.png?alt=media&token=9a029fbc-3029-4771-92f8-6bf6c327a2b6',
                'image2' => '',
                'image3' => '',
                'link' => '',
                'start_date' => '2022-09-01',
                'completion_date' => '2023-01-01',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'Jember Green Herbalist',
                'position' => 'Fullstack Developer',
                'pihak' => '-',
                'technology' => 'PHP, CSS, JavaScript dan Mysql',
                'deskripsi' => 'JGH merupakan Aplikasi ini merupakan Sistem Informasi dan Penjualan Online Berbasis Website dan Mobile .',
                'jobdesk' => '• Merancang dan mengimplementasikan database untuk menyimpan data produk, pengguna, dan transaksi.
                              • Membangun API RESTful untuk menghubungkan frontend dan backend.
                              • Membangun backend sistem menggunakan PHP Native, bertanggung jawab atas logika bisnis, integrasi pembayaran, dan manajemen pengguna.
                              • Menerapkan fitur keranjang belanja, dan pembayaran secara transfer.
                              • Memudahkan Proses penjualan melalui sistem yang dikembangkan.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Fjgh%2Fjgh.png?alt=media&token=565b9db6-d6df-48c8-a2ba-b741370daf67',
                'image2' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Fjgh%2Fjgh%20(2).png?alt=media&token=46b7c943-3422-41cd-9990-dbcfa816db6c',
                'image3' => '',
                'link' => '',
                'start_date' => '2021-10-01',
                'completion_date' => '2021-12-01',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'Batik Kinnara Kinnari',
                'position' => 'FullStack Developer Freelance',
                'pihak' => '-',
                'technology' => 'PHP, CSS, JavaScript, dan MySQL',
                'deskripsi' => 'Aplikasi company profile untuk Batik Kinnara Kinnari yang menampilkan informasi tentang batik.',
                'jobdesk' => '• Merancang dan mengembangkan website company profile yang responsif dan user-friendly menggunakan PHP, CSS, dan JavaScript.  
                              • Mengimplementasikan fitur multibahasa untuk meningkatkan aksesibilitas pengguna dari berbagai latar belakang.  
                              • Mengembangkan sistem navigasi yang intuitif agar pengguna dapat dengan mudah menemukan informasi terkait batik.  
                              • Mengelola dan mengoptimalkan database MySQL untuk menyimpan informasi produk dan sejarah batik secara efisien.  
                              • Meningkatkan performa dan kecepatan loading halaman untuk pengalaman pengguna yang lebih baik.  
                              • Melakukan debugging, pengujian, dan pemeliharaan sistem guna memastikan stabilitas dan keamanan website.',
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Fbatik%2Fbatik.png?alt=media&token=f3482c52-8616-43a4-bca5-6a8638b3d930',
                'image2' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Fkerjaaan%2Fbatik%2Fbatik%20(2).png?alt=media&token=270760e9-95ed-4b10-a58d-e5f99dc9fb15',
                'image3' => '',
                'link' => '',
                'start_date' => '2024-05-01',
                'completion_date' => '2024-06-30',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],            
            [
                'name' => 'Informatic Pedia',
                'position' => 'FullStack Developer',
                'pihak' => '-',
                'technology' => 'PHP, CSS, JavaScript, dan MySQL',
                'deskripsi' => 'Informatic Pedia adalah aplikasi yang menyediakan informasi seputar dunia informatika.',
                'jobdesk' => '• Merancang dan mengembangkan antarmuka pengguna yang responsif dan ramah pengguna menggunakan PHP, CSS, dan JavaScript.  
                              • Membangun fitur untuk menampilkan artikel, tutorial, dan materi pembelajaran tentang informatika secara dinamis.  
                              • Mengimplementasikan sistem pencarian dan kategori untuk memudahkan pengguna dalam menemukan informasi yang relevan.
                              • Mengoptimalkan performa aplikasi, termasuk kecepatan loading halaman dan efisiensi database dengan MySQL.  
                              • Menjamin keamanan aplikasi dengan menerapkan standar keamanan dalam pengelolaan data dan akses pengguna.  
                              • Melakukan debugging dan testing untuk memastikan aplikasi berjalan dengan lancar dan bebas dari bug.',
                'image' => '',
                'image2' => '',
                'image3' => '',
                'link' => '',
                'start_date' => '2022-10-01',
                'completion_date' => '2022-10-30',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'Travell.IO',
                'position' => 'FullStack Developer',
                'pihak' => '-',
                'technology' => 'React.JS, Flutter, Firebase Realtime Database',
                'deskripsi' => 'Travell.IO adalah sistem informasi dan pemesanan tiket tur berbasis website dan mobile framework yang memungkinkan pengguna untuk melakukan booking tiket secara real-time.',
                'jobdesk' => '• Membangun backend responsif berbasis real-time menggunakan Firebase Realtime Database untuk menyimpan dan menyinkronkan data pemesanan tiket, ketersediaan tur, dan informasi pengguna secara instan.  
                              • Mengembangkan frontend dinamis menggunakan React.JS untuk menampilkan data real-time dari Firebase, sehingga memberikan pengalaman pengguna yang lebih interaktif dan terkini.  
                              • Mengimplementasikan fitur real-time seperti notifikasi pemesanan dan pembaruan status pemesanan secara otomatis.  
                              • Membangun aplikasi mobile yang responsif dan ramah pengguna menggunakan Flutter, memastikan pengalaman pemesanan yang lancar di berbagai perangkat.  
                              • Mengoptimalkan performa sistem dengan mengelola data secara efisien dan meningkatkan pengalaman pengguna melalui desain antarmuka yang intuitif.  
                              • Melakukan debugging dan pengujian sistem untuk memastikan kestabilan dan keamanan aplikasi.',
                'image' => '',
                'image2' => '',
                'image3' => '',
                'link' => '',
                'start_date' => '2022-02-01',
                'completion_date' => '2022-06-30',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'Vegan Way',
                'position' => 'Lead Developer dan FullStack Developer',
                'pihak' => '-',
                'technology' => 'Java, MySQL',
                'deskripsi' => 'Vegan Way adalah sistem kasir berbasis desktop yang dirancang untuk meningkatkan efisiensi dalam manajemen penjualan dan laporan transaksi.',
                'jobdesk' => '• Memimpin tim pengembang dalam pengembangan sistem kasir berbasis desktop.  
                              • Merancang dan mengembangkan fitur utama, termasuk manajemen produk dan laporan penjualan.  
                              • Menggunakan Java dan MySQL untuk membangun sistem yang efisien dan skalabel.  
                              • Mengoptimalkan performa sistem, meningkatkan kecepatan pemrosesan transaksi kasir hingga 20%.  
                              • Melakukan debugging dan pengujian sistem untuk memastikan stabilitas dan keamanan aplikasi.  
                              • Berkolaborasi dengan tim operasional untuk menyesuaikan sistem dengan kebutuhan bisnis.',
                'image' => '',
                'image2' => '',
                'image3' => '',
                'link' => '',
                'start_date' => '2021-01-01',
                'completion_date' => '2021-04-01',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'URL Shortener',
                'position' => 'FullStack Developer',
                'pihak' => '-',
                'technology' => 'Laravel, PHP, MySQL, JavaScript',
                'deskripsi' => 'URL Shortener adalah aplikasi berbasis web yang memungkinkan pengguna untuk memperpendek link dengan mudah dan melacak statistik penggunaannya.',
                'jobdesk' => '• Merancang dan mengembangkan sistem pemendek URL menggunakan Laravel sebagai backend utama.
                              • Membangun antarmuka pengguna yang responsif dan intuitif menggunakan HTML, CSS, dan JavaScript.  
                              • Mengoptimalkan performa sistem untuk memastikan proses pemendekan URL berjalan cepat dan efisien.  
                              • Mengelola database MySQL untuk menyimpan dan mengelola data URL secara aman dan terstruktur.  
                              • Melakukan debugging dan pengujian sistem untuk memastikan aplikasi berjalan stabil tanpa bug.',
                'image' => '',
                'image2' => '',
                'image3' => '',
                'link' => '',
                'start_date' => '2025-01-04',
                'completion_date' => '2025-01-06',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
            [
                'name' => 'Aplikasi Portofolio',
                'position' => 'FullStack Developer',
                'pihak' => '-',
                'technology' => 'Laravel, PHP, MySQL, JavaScript, CMS',
                'deskripsi' => 'Aplikasi Portofolio adalah website berbasis Laravel yang memungkinkan pengguna untuk menampilkan portofolio secara dinamis menggunakan CMS.',
                'jobdesk' => '• Merancang dan mengembangkan website portofolio interaktif menggunakan Laravel sebagai backend utama.  
                              • Mengimplementasikan sistem manajemen konten (CMS) agar pengguna dapat dengan mudah menambahkan dan mengedit portofolio mereka.  
                              • Membangun antarmuka pengguna yang responsif dan modern menggunakan PHP, CSS, dan JavaScript.  
                              • Mengelola database MySQL untuk menyimpan informasi portofolio dengan struktur yang efisien dan aman.  
                              • Mengoptimalkan performa dan keamanan website untuk memastikan pengalaman pengguna yang lancar.  
                              • Melakukan debugging dan pengujian sistem untuk memastikan stabilitas dan kinerja optimal.',
                'image' => '',
                'image2' => '',
                'image3' => '',
                'link' => '',
                'start_date' => '2024-12-01',
                'completion_date' => '2024-12-31',
                'kd_status' => 'KS1',
                'kd_kategori' => 'KT2',
            ],
                                    
        ];

        foreach ($proyeks as $proyek) {
            Proyek::create($proyek);
        }
    }
}