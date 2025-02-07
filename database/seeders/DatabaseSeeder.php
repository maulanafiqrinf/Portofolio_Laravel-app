<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(user::class);
        $this->call(KategoriKeahlianSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(KeahlianSeeder::class);
        $this->call(LayananSeeder::class);
        $this->call(PendidikanSeeder::class);
        $this->call(PengaturanSeeder::class);
        $this->call(ProyekSeeder::class);
        $this->call(SertifikatSeeder::class);
        $this->call(TentangSayaSeeder::class);
        
    }
}
