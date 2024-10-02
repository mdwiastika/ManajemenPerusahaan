<?php

namespace Database\Seeders;

use App\Models\Departemen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $departemens = [
            ['nama_departemen' => 'IT', 'created_at' => $now, 'updated_at' => $now],
            ['nama_departemen' => 'HRD', 'created_at' => $now, 'updated_at' => $now],
            ['nama_departemen' => 'Marketing', 'created_at' => $now, 'updated_at' => $now],
            ['nama_departemen' => 'Finance', 'created_at' => $now, 'updated_at' => $now],
            ['nama_departemen' => 'Operational', 'created_at' => $now, 'updated_at' => $now],
            ['nama_departemen' => 'Production', 'created_at' => $now, 'updated_at' => $now],
            ['nama_departemen' => 'Quality Control', 'created_at' => $now, 'updated_at' => $now],
            ['nama_departemen' => 'Research & Development', 'created_at' => $now, 'updated_at' => $now],
            ['nama_departemen' => 'Supply Chain', 'created_at' => $now, 'updated_at' => $now],
            ['nama_departemen' => 'Legal', 'created_at' => $now, 'updated_at' => $now],
        ];

        Departemen::insert($departemens);
    }
}
