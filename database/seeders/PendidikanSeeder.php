<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pendidikan;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pendidikans = [
            [
                'name' => 'Politeknik Negeri Jember',
                'jurusan' => 'D4 Teknik Informatika',
                'deskripsi' => '• IPK: 3.90/4.00
                                • Fullstack Developer: Berpengalaman dalam merancang dan mengembangkan aplikasi untuk berbagai platform, termasuk web, dan kecerdasan buatan.
                                • Penghargaan: Juara kategori desain dan video pada TIF Exhibition 2021 dan 2022.
                                • Program Kampus Merdeka (MBKM): Peserta Program Pertukaran Pelajar di Politeknik Negeri Malang dengan fokus pada penguasaan React.js, sekaligus peserta dan asisten mentor dalam Studi Independen Kampus Merdeka bersama Ruang guru. ',
                'link' => '',
                'start_date' => '2020-09-01',
                'completion_date' => '2024-11-02',
                'kd_status' => 'KS1',
            ],
        ];

        foreach ($pendidikans as $pendidikan) {
            Pendidikan::create($pendidikan);
        }
    }
}
