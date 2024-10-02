<?php

namespace Database\Seeders;

use App\Models\Absensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $absensis = [
            [
                'karyawan_id' => 1,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 2,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '08:15:00',
                'waktu_keluar' => '17:15:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 3,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '09:00:00',
                'waktu_keluar' => '18:00:00',
                'status_absensi' => 'izin',
            ],
            [
                'karyawan_id' => 4,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '08:30:00',
                'waktu_keluar' => '17:30:00',
                'status_absensi' => 'sakit',
            ],
            [
                'karyawan_id' => 5,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'cuti',
            ],
            [
                'karyawan_id' => 6,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'alpha',
            ],
            [
                'karyawan_id' => 7,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '08:45:00',
                'waktu_keluar' => '17:45:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 8,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '09:00:00',
                'waktu_keluar' => '18:00:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 9,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'izin',
            ],
            [
                'karyawan_id' => 10,
                'tanggal' => '2023-10-01',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'sakit',
            ],
            [
                'karyawan_id' => 1,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 2,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '08:15:00',
                'waktu_keluar' => '17:15:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 3,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '09:00:00',
                'waktu_keluar' => '18:00:00',
                'status_absensi' => 'izin',
            ],
            [
                'karyawan_id' => 4,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '08:30:00',
                'waktu_keluar' => '17:30:00',
                'status_absensi' => 'sakit',
            ],
            [
                'karyawan_id' => 5,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'cuti',
            ],
            [
                'karyawan_id' => 6,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'alpha',
            ],
            [
                'karyawan_id' => 7,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '08:45:00',
                'waktu_keluar' => '17:45:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 8,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '09:00:00',
                'waktu_keluar' => '18:00:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 9,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'izin',
            ],
            [
                'karyawan_id' => 10,
                'tanggal' => '2023-10-02',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'sakit',
            ],
            [
                'karyawan_id' => 1,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 2,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '08:15:00',
                'waktu_keluar' => '17:15:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 3,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '09:00:00',
                'waktu_keluar' => '18:00:00',
                'status_absensi' => 'izin',
            ],
            [
                'karyawan_id' => 4,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '08:30:00',
                'waktu_keluar' => '17:30:00',
                'status_absensi' => 'sakit',
            ],
            [
                'karyawan_id' => 5,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'cuti',
            ],
            [
                'karyawan_id' => 6,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'alpha',
            ],
            [
                'karyawan_id' => 7,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '08:45:00',
                'waktu_keluar' => '17:45:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 8,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '09:00:00',
                'waktu_keluar' => '18:00:00',
                'status_absensi' => 'hadir',
            ],
            [
                'karyawan_id' => 9,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'izin',
            ],
            [
                'karyawan_id' => 10,
                'tanggal' => '2023-10-03',
                'waktu_masuk' => '08:00:00',
                'waktu_keluar' => '17:00:00',
                'status_absensi' => 'sakit',
            ],
        ];
        Absensi::insert($absensis);
    }
}
