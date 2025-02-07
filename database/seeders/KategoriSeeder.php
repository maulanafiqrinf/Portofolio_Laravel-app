<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'kd_kategori' => 'KT1',
            'name' => 'Pengalaman',
        ]);

        Kategori::create([
            'kd_kategori' => 'KT2',
            'name' => 'Proyek',
        ]);
    }
}
