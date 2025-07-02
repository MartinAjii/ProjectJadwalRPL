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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->integer('id_jadwal')->primary();
            $table->string('nama_jadwal', 100);
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->enum('status', ['Pending', 'Diterima', 'Ditolak', 'Aktif', 'Nonaktif'])->nullable();
            $table->enum('gambar_jadwal', ['pembenihan.png', 'pendederan.png', 'pembesaran.png', 'penangananHama.png', 'pemanenan.png', 'pakanBuatan.png', 'pakanAlami.png', 'kualitasAir.png']);
            $table->integer('id_lab')->nullable()->index('id_lab');
            $table->integer('id_guru')->nullable()->index('id_guru');
            $table->integer('id_operator')->nullable()->index('id_operator');
            $table->integer('id_mapel')->nullable()->index('fk_jadwal_mapel');
            $table->integer('id_kelas')->nullable()->index('fk_jadwal_kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
