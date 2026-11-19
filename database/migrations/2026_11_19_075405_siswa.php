<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('siswa', function (Blueprint $table) {
    $table->string('nis', 20)->primary();
    $table->string('nama', 100);
    $table->string('kelas', 50);
    $table->integer('umur');
    $table->enum('jenis_kelamin', ['L', 'P']);
    $table->timestamps();
    });

    }

    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
