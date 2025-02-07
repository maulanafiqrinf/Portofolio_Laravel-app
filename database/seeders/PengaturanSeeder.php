<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengaturan;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengaturans = [
            [
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Flogoapp.png?alt=media&token=3dca9e28-fec9-415e-a8fa-8f8a99b2d516',
                'map' => '<iframe src="https://www.google.com/maps/embed?..."></iframe>',
            ],
        ];

        foreach ($pengaturans as $pengaturan) {
            Pengaturan::create($pengaturan);
        }
    }
}
