<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawans = [
            [
                'nama_lengkap' => 'Ahmad Firdaus',
                'email' => 'ahmad.firdaus@example.com',
                'nomor_telepon' => '081234567890',
                'tanggal_lahir' => '1990-05-12',
                'alamat' => 'Jl. Merpati No. 45, Jakarta Selatan',
                'tanggal_masuk' => '2020-01-10',
                'departemen_id' => 3,
                'jabatan_id' => 2,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Budi Santoso',
                'email' => 'budi.santoso@example.com',
                'nomor_telepon' => '081234567891',
                'tanggal_lahir' => '1985-08-20',
                'alamat' => 'Jl. Kenari No. 12, Bandung',
                'tanggal_masuk' => '2019-03-15',
                'departemen_id' => 1,
                'jabatan_id' => 1,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Citra Dewi',
                'email' => 'citra.dewi@example.com',
                'nomor_telepon' => '081234567892',
                'tanggal_lahir' => '1992-11-30',
                'alamat' => 'Jl. Anggrek No. 7, Surabaya',
                'tanggal_masuk' => '2021-06-01',
                'departemen_id' => 2,
                'jabatan_id' => 3,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Dedi Pratama',
                'email' => 'dedi.pratama@example.com',
                'nomor_telepon' => '081234567893',
                'tanggal_lahir' => '1988-02-14',
                'alamat' => 'Jl. Melati No. 9, Medan',
                'tanggal_masuk' => '2018-09-20',
                'departemen_id' => 4,
                'jabatan_id' => 4,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Eka Putri',
                'email' => 'eka.putri@example.com',
                'nomor_telepon' => '081234567894',
                'tanggal_lahir' => '1995-07-25',
                'alamat' => 'Jl. Mawar No. 3, Yogyakarta',
                'tanggal_masuk' => '2022-02-10',
                'departemen_id' => 5,
                'jabatan_id' => 5,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Fajar Nugroho',
                'email' => 'fajar.nugroho@example.com',
                'nomor_telepon' => '081234567895',
                'tanggal_lahir' => '1991-12-05',
                'alamat' => 'Jl. Cempaka No. 11, Semarang',
                'tanggal_masuk' => '2020-11-15',
                'departemen_id' => 6,
                'jabatan_id' => 6,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Gita Sari',
                'email' => 'gita.sari@example.com',
                'nomor_telepon' => '081234567896',
                'tanggal_lahir' => '1987-04-18',
                'alamat' => 'Jl. Flamboyan No. 8, Malang',
                'tanggal_masuk' => '2017-07-20',
                'departemen_id' => 7,
                'jabatan_id' => 7,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Hadi Wijaya',
                'email' => 'hadi.wijaya@example.com',
                'nomor_telepon' => '081234567897',
                'tanggal_lahir' => '1989-09-10',
                'alamat' => 'Jl. Dahlia No. 6, Palembang',
                'tanggal_masuk' => '2016-05-25',
                'departemen_id' => 8,
                'jabatan_id' => 8,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Indah Permata',
                'email' => 'indah.permata@example.com',
                'nomor_telepon' => '081234567898',
                'tanggal_lahir' => '1993-03-22',
                'alamat' => 'Jl. Kamboja No. 4, Makassar',
                'tanggal_masuk' => '2021-08-30',
                'departemen_id' => 9,
                'jabatan_id' => 9,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_lengkap' => 'Joko Susilo',
                'email' => 'joko.susilo@example.com',
                'nomor_telepon' => '081234567899',
                'tanggal_lahir' => '1994-06-15',
                'alamat' => 'Jl. Teratai No. 2, Denpasar',
                'tanggal_masuk' => '2019-12-05',
                'departemen_id' => 10,
                'jabatan_id' => 10,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        Karyawan::insert($karyawans);
    }
}
