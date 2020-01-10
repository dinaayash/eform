<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPerubahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_perubahan', function (Blueprint $table) {
            $table->bigIncrements('id_perubahan');
            $table->string('no_perubahan');
            $table->string('nama_pemohon');
            $table->string('jabatan_pemohon');
            $table->string('satuan_kerja');
            $table->string('nama_atasan');
            $table->string('jabatan_atasan');
            $table->string('nama_proyek');
            $table->string('desc_perubahan');
            $table->date('masa_perubahan');
            $table->string('alasan_perubahan');
            $table->string('tipe_perubahan');
            $table->string('prioritas_perubahan');
            $table->string('dampak_perubahan');
            $table->text('lingkungan');
            $table->text('desc_plantest');
            $table->text('desc_rollback');
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
        Schema::dropIfExists('tbl_perubahan');
    }
}
