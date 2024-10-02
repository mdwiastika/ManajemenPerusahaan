<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_telepon',
        'tanggal_lahir',
        'alamat',
        'tanggal_masuk',
        'departemen_id',
        'jabatan_id',
        'status',
    ];
    public function departemen()
    {
        return $this->belongsTo(Departemen::class);
    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
