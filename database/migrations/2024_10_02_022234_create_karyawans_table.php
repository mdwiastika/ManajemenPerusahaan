<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->date('tanggal_masuk');
            $table->foreignId('departmen_id')->constrained('departemens')->cascadeOnDelete();
            $table->foreignId('jabatan_id')->constrained('jabatans')->cascadeOnDelete();
            $table->enum('status', ['aktif', 'nonaktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
