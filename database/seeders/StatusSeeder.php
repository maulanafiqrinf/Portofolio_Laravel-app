<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'kd_status' => 'KS1',
                'name' => 'Aktif',
            ],
            [
                'kd_status' => 'KS2',
                'name' => 'Tidak Aktif',
            ],
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}
