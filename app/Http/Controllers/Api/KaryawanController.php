<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KaryawanResource;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::latest()->get();
        return new KaryawanResource(true, 'Successfuly Get Karyawan Data!', $karyawans);
    }
}
