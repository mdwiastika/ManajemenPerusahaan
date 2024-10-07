<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AbsensiResource;
use App\Models\Absensi;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $absensis = Absensi::query();
            if ($request->has('filter')) {
                $filters = $request->filter;
                if (isset($filters['karyawan_id'])) {
                    $absensis->where('karyawan_id', $filters['karyawan_id']);
                }
                if (isset($filters['date'])) {
                    $absensis->where('tanggal', $filters['date']);
                }
            }
            $absensis = $absensis->with('karyawan')->paginate(10);
            return new AbsensiResource(true, 'Successfully Get Absensi Data!', $absensis);
        } catch (\Throwable $th) {
            return new AbsensiResource(false, $th->getMessage(), null);
        }
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'karyawan_id' => 'required|exists:karyawans,id',
                'tanggal' => 'required|date|before_or_equal:today',
                'waktu_masuk' => 'required|date_format:H:i:s|before:waktu_keluar',
                'waktu_keluar' => 'required|date_format:H:i:s|after:waktu_masuk',
                'status_absensi' => 'required|in:hadir,izin,sakit,cuti,alpa',
            ]);
            $absensi = Absensi::create($validatedData);
            $absensi->load('karyawan');
            return new AbsensiResource(true, 'Successfully Store Absensi Data!', $absensi);
        } catch (ValidationException $ve) {
            return new AbsensiResource(false, $ve->errors(), null);
        }
    }
    public function show($id)
    {
        try {
            $absensi = Absensi::with('karyawan')->findOrFail($id);
            return new AbsensiResource(true, 'Successfully Show Detail Absensi!', $absensi);
        } catch (ModelNotFoundException $th) {
            return new AbsensiResource(false, $th->getMessage(), null);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $absensi = Absensi::findOrFail($id);
            $validatedData = $request->validate([
                'karyawan_id' => 'required|exists:karyawans,id',
                'tanggal' => 'required|date|before_or_equal:today',
                'waktu_masuk' => 'required|date_format:H:i:s|before:waktu_keluar',
                'waktu_keluar' => 'required|date_format:H:i:s|after:waktu_masuk',
                'status_absensi' => 'required|in:hadir,izin,sakit,cuti,alpa',
            ]);
            $absensi->update($validatedData);
            $absensi->load('karyawan');
            return new AbsensiResource(true, 'Successfully Update Absensi Data!', $absensi);
        } catch (ValidationException $ve) {
            return new AbsensiResource(false, $ve->errors(), null);
        } catch (ModelNotFoundException $me) {
            return new AbsensiResource(false, $me->getMessage(), null);
        }
    }
    public function destroy($id)
    {
        try {
            $absensi = Absensi::findOrFail($id);
            $absensi->delete();
            return new AbsensiResource(true, 'Successfully Delete Absensi Data!', null);
        } catch (ModelNotFoundException $me) {
            return new AbsensiResource(false, $me->getMessage(), null);
        }
    }
}
