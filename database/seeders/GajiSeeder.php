<?php

namespace Database\Seeders;

use App\Models\Gaji;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gajis = [];
        for ($i = 1; $i <= 50; $i++) {
            $gaji_pokok = rand(4000000, 7000000);
            $tunjangan = rand(500000, 2000000);
            $potongan = rand(300000, 1000000);
            $gajis[] = [
                'karyawan_id' => rand(1, 10),
                'bulan' => rand(2000, 2024) . '-' . str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT),
                'gaji_pokok' => $gaji_pokok,
                'tunjangan' => $tunjangan,
                'potongan' => $potongan,
                'total_gaji' => $gaji_pokok + $tunjangan - $potongan,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        Gaji::insert($gajis);
    }
}
