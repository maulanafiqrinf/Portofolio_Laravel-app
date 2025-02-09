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
                'image' => 'https://firebasestorage.googleapis.com/v0/b/project-99ec7.appspot.com/o/Proyek%2FPortofolio%2Flogoapp.webp?alt=media&token=a341b24c-36d9-4db3-8151-7ffa03f82fa6',
                'map' => '<iframe src="https://www.google.com/maps/embed?..."></iframe>',
            ],
        ];

        foreach ($pengaturans as $pengaturan) {
            Pengaturan::create($pengaturan);
        }
    }
}
