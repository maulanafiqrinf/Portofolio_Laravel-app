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
                'name' => 'Konsultasi IT',
                'deskripsi' => 'Layanan konsultasi profesional terkait teknologi informasi, termasuk analisis kebutuhan, infrastruktur, dan solusi teknologi.',
                'icon' => 'it-consulting.png',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Pembuatan Website',
                'deskripsi' => 'Jasa pembuatan dan pengembangan website responsif serta optimal untuk bisnis dan personal.',
                'icon' => 'website-development.png',
                'kd_status' => 'KS1',
            ],
            [
                'name' => 'Pengembangan Model ML dan DL',
                'deskripsi' => 'Layanan pembuatan model kecerdasan buatan menggunakan Machine Learning dan Deep Learning untuk berbagai kebutuhan.',
                'icon' => 'ai-development.png',
                'kd_status' => 'KS1',
            ],
        ];
        foreach ($layanans as $layanan) {
            Layanan::create($layanan);
        }
    }
}
