<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblHakAksesNO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hak_akses_non', function (Blueprint $table) {
            $table->bigIncrements('id_hak_akses_NO');
            $table->string('no_hak_akses_NO');
            $table->timestamps('tanggal_input');
            $table->string('nama_pemohon');
            $table->string('jabatan_pemohon');
            $table->string('satuan_kerja');
            $table->string('nama_atasan');
            // $table->string('email_atasan');
            $table->string('jabatan_atasan');
            $table->text('alasan');
            $table->string('status_permohonan');
            // $table->string('hash_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hak_akses_non');
    }
}
