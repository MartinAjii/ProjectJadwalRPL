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
        Schema::create('labolatorium', function (Blueprint $table) {
            $table->integer('id_lab')->primary();
            $table->string('nama_lab', 200);
            $table->string('status', 50);
            $table->string('gambar', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labolatorium');
    }
};
