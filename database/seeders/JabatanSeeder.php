<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = now();

        $jabatans = [
            ['nama_jabatan' => 'Staff', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['nama_jabatan' => 'Supervisor', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['nama_jabatan' => 'Manager', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['nama_jabatan' => 'General Manager', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['nama_jabatan' => 'Director', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['nama_jabatan' => 'Commissioner', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['nama_jabatan' => 'President Director', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['nama_jabatan' => 'Commissioner', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['nama_jabatan' => 'President Director', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['nama_jabatan' => 'Commissioner', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
        ];

        Jabatan::insert($jabatans);
    }
}
