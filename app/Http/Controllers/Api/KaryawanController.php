<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KaryawanResource;
use App\Models\Karyawan;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $karyawans = Karyawan::query();
        if ($request->has('filter')) {
            $filters = $request->filter;
            if (isset($filters['departemen_id'])) {
                $karyawans->where('departemen_id', $filters['departemen_id']);
            }
            if (isset($filters['jabatan_id'])) {
                $karyawans->where('jabatan_id', $filters['jabatan_id']);
            }
        }
        $karyawans = $karyawans->with(['departemen', 'jabatan'])->paginate(10);
        return new KaryawanResource(true, 'Successfuly Get Karyawan Data!', $karyawans);
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_lengkap' => 'required',
                'email' => 'required|email|unique:karyawans',
                'nomor_telepon' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'tanggal_lahir' => 'required|date|before:today',
                'alamat' => 'required',
                'tanggal_masuk' => 'required|date|after:tanggal_lahir',
                'departemen_id' => 'required|exists:departemens,id',
                'jabatan_id' => 'required|exists:jabatans,id',
                'status' => 'required',
            ]);
            $karyawan = Karyawan::create($validatedData);
            return new KaryawanResource(true, 'Successfuly Store Karyawan Data!', $karyawan);
        } catch (ValidationException $th) {
            return new KaryawanResource(false, $th->errors(), null);
        }
    }
    public function show($id)
    {
        try {
            $karyawan = Karyawan::with(['departemen', 'jabatan'])->findOrFail($id);
            return new KaryawanResource(true, 'Successfuly Show Detail Karyawan!', $karyawan);
        } catch (ModelNotFoundException $th) {
            return new KaryawanResource(false, $th->getMessage(), null);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $karyawan = Karyawan::with(['departemen', 'jabatan'])->findOrFail($id);
            $validatedData = $request->validate([
                'nama_lengkap' => 'required',
                'email' => 'required|email|unique:karyawans,email,' . $id,
                'nomor_telepon' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'tanggal_lahir' => 'required|date|before:today',
                'alamat' => 'required',
                'tanggal_masuk' => 'required|date|after:tanggal_lahir',
                'departemen_id' => 'required|exists:departemens,id',
                'jabatan_id' => 'required|exists:jabatans,id',
                'status' => 'required',
            ]);
            $karyawan->update($validatedData);
            return new KaryawanResource(true, 'Successfuly Update Karyawan Data!', $karyawan);
        } catch (ValidationException $ve) {
            return new KaryawanResource(false, $ve->errors(), null);
        } catch (ModelNotFoundException $me) {
            return new KaryawanResource(false, $me->getMessage(), null);
        }
    }
    public function destroy($id)
    {
        try {
            $karyawan = Karyawan::findOrFail($id);
            $karyawan->delete();
            return new KaryawanResource(true, 'Successfuly Delete Karyawan!', null);
        } catch (ModelNotFoundException $me) {
            return new KaryawanResource(false, $me->getMessage(), null);
        }
    }
}
