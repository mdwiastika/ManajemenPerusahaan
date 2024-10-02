<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DepartemenResource;
use App\Models\Departemen;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DepartemenController extends Controller
{
    public function index()
    {
        $departemens = Departemen::latest()->get();
        return new DepartemenResource(true, 'Sucessfully Get Departemen Data!', $departemens);
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_departemen' => 'required',
            ]);
            $departemen = Departemen::create($validatedData);
            return new DepartemenResource(true, 'Successfully Store Departemen Data!', $departemen);
        } catch (ValidationException $ve) {
            return new DepartemenResource(false, $ve->errors(), null);
        }
    }
    public function show($id)
    {
        try {
            $departemen = Departemen::findOrFail($id);
            return new DepartemenResource(true, 'Successfully Show Detail Departement!', $departemen);
        } catch (ModelNotFoundException $th) {
            return new DepartemenResource(false, $th->getMessage(), null);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'nama_departemen' => 'required',
            ]);
            $departemen = Departemen::findOrFail($id);
            $departemen->update($validatedData);
            return new DepartemenResource(true, 'Successfully Update Departemen Data!', $departemen);
        } catch (ValidationException $ve) {
            return new DepartemenResource(false, $ve->errors(), null);
        } catch (ModelNotFoundException $th) {
            return new DepartemenResource(false, $th->getMessage(), null);
        }
    }
    public function destroy($id)
    {
        try {
            $departemen = Departemen::findOrFail($id);
            $departemen->delete();
            return new DepartemenResource(true, 'Successfully Delete Departemen!', null);
        } catch (ModelNotFoundException $th) {
            return new DepartemenResource(false, $th->getMessage(), null);
        }
    }
}
