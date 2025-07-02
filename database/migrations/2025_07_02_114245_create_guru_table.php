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
        Schema::create('guru', function (Blueprint $table) {
            $table->integer('id_guru')->primary();
            $table->string('nama', 200);
            $table->string('email', 200);
            $table->string('username', 200);
            $table->string('password', 200);
            $table->string('nip', 200);
            $table->binary('foto')->nullable();
            $table->integer('id_role')->index('id_role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
