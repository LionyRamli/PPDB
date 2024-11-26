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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('jurusan');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('agama');
            $table->string('kelas');
            $table->string('anak_ke');
            $table->text('alamat_siswa');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
