<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GajiResource;
use App\Models\Gaji;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = Gaji::with('karyawan')->latest()->get();
        return new GajiResource(true, 'Successfully Get Absensi Data', $gaji);
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'karyawan_id' => 'required|exists:karyawans,id',
                'bulan' => 'required|date_format:Y-m',
                'gaji_pokok' => 'required|numeric',
                'tunjangan' => 'required|numeric',
                'potongan' => 'required|numeric',
                'total_gaji' => 'required|numeric',
            ]);
            $gaji = Gaji::create($validatedData);
            $gaji->load('karyawan');
            return new GajiResource(true, 'Successfully Store Gaji Data!', $gaji);
        } catch (ValidationException $ve) {
            return new GajiResource(false, $ve->errors(), null);
        }
    }
    public function show($id)
    {
        try {
            $gaji = Gaji::with('karyawan')->findOrFail($id);
            return new GajiResource(true, 'Successfully Show Detail Gaji!', $gaji);
        } catch (ModelNotFoundException $th) {
            return new GajiResource(false, $th->getMessage(), null);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $gaji = Gaji::findOrFail($id);
            $validatedData = $request->validate([
                'karyawan_id' => 'required|exists:karyawans,id',
                'bulan' => 'required|date_format:Y-m',
                'gaji_pokok' => 'required|numeric',
                'tunjangan' => 'required|numeric',
                'potongan' => 'required|numeric',
                'total_gaji' => 'required|numeric',
            ]);
            $gaji->update($validatedData);
            $gaji->load('karyawan');
            return new GajiResource(true, 'Successfully Update Gaji Data!', $gaji);
        } catch (ValidationException $ve) {
            return new GajiResource(false, $ve->errors(), null);
        }
    }
    public function destroy($id)
    {
        try {
            $gaji = Gaji::findOrFail($id);
            $gaji->delete();
            return new GajiResource(true, 'Successfully Delete Gaji Data!', null);
        } catch (ModelNotFoundException $me) {
            return new GajiResource(false, $me->getMessage(), null);
        }
    }
}
