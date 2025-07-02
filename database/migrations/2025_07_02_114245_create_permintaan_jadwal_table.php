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
        Schema::create('permintaan_jadwal', function (Blueprint $table) {
            $table->integer('id_permintaan');
            $table->integer('id_jadwal');
            $table->integer('id_guru');
            $table->integer('id_mapel');
            $table->integer('id_kelas');
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->enum('status', ['Pending', 'Diterima', 'Ditolak', 'Dibatalkan'])->nullable()->default('Pending');
            $table->text('catatan')->nullable();
            $table->timestamp('waktu_pengajuan')->useCurrent();
            $table->string('gambar_jadwal', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_jadwal');
    }
};
