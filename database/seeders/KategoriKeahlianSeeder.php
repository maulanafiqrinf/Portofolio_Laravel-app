<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriKeahlian;

class KategoriKeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriKeahlian::create([
            'kd_kategori_keahlian' => 'KK1',
            'name' => 'SoftSkills',
        ]);

        KategoriKeahlian::create([
            'kd_kategori_keahlian' => 'KK2',
            'name' => 'HardSkills',
        ]);
    }
}