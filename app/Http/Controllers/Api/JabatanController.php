<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\JabatanResource;
use App\Models\Jabatan;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatans = Jabatan::latest()->get();
        return new JabatanResource(true, 'Successfully Get Jabatan Data', $jabatans);
    }
    public function show($id)
    {
        try {
            $jabatan = Jabatan::findOrFail($id);
            return new JabatanResource(true, 'Successfully Show Data Jabatan!', $jabatan);
        } catch (ModelNotFoundException $th) {
            return new JabatanResource(false, $th->getMessage(), null);
        }
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_jabatan' => 'required',
            ]);
            $jabatan = Jabatan::create($validatedData);
            return new JabatanResource(true, 'Sucessfully Store Jabatan Data!', $jabatan);
        } catch (ValidationException $th) {
            return new JabatanResource(false, $th->errors(), null);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $jabatan = Jabatan::findOrFail($id);
            $validatedData = $request->validate([
                'nama_jabatan' => 'required',
            ]);
            $jabatan->update($validatedData);
            return new JabatanResource(true, 'Sucessfully Update Jabatan Data!', $jabatan);
        } catch (ValidationException $ve) {
            return new JabatanResource(false, $ve->errors(), null);
        } catch (ModelNotFoundException $me) {
            return new JabatanResource(false, $me->getMessage(), null);
        }
    }
    public function destroy($id)
    {
        try {
            $jabatan = Jabatan::findOrFail($id);
            $jabatan->delete();
            return new JabatanResource(true, 'Sucessfully Delete Jabatan Data!', null);
        } catch (ModelNotFoundException $me) {
            return new JabatanResource(false, $me->getMessage(), null);
        }
    }
}
