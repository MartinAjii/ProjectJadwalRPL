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
        Schema::create('siswa', function (Blueprint $table) {
            $table->integer('id_siswa');
            $table->string('nama', 200);
            $table->string('email', 200);
            $table->string('kelas', 50);
            $table->string('jurusan', 50);
            $table->string('username', 200);
            $table->string('password', 200);
            $table->string('nis', 200);
            $table->binary('foto');
            $table->integer('id_role');
            $table->integer('id_kelas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
