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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anggota');
            $table->string('kwaran');
            $table->string('no_gudep');
            $table->string('tmpt_lahir');
            $table->string('tgl_lahir');
            $table->string('gol_darah');
            $table->string('agama');
            $table->string('nama_ortu');
            $table->string('alamat_rumah');
            $table->string('no_hp');
            $table->string('pangkalan');
            $table->string('nama_regu');
            $table->string('nama_sekolah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
