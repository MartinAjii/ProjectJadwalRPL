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
        Schema::create('laporan_praktikum', function (Blueprint $table) {
            $table->integer('id_laporan')->primary();
            $table->string('hasil_praktikum', 100);
            $table->string('catatan', 1000);
            $table->date('tanggal');
            $table->integer('id_jadwal')->index('id_jadwal');
            $table->integer('id_siswa')->index('id_siswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_praktikum');
    }
};
