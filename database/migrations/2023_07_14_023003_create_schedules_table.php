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
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode');
            $table->string('mahasiswa');
            $table->string('kelas');
            $table->string('ruang');
            $table->integer('hari');
            $table->string('jam');
            $table->string('dosen1');
            $table->string('dosen2')->nullable();
            $table->string('dosen3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
