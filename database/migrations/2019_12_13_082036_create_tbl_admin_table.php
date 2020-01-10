<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->bigIncrements('id_adm');
            $table->string('nama_admin');
            $table->string('no_hak_akses_NO');
            $table->string('nama_pemohon');
            $table->string('nama_atasan');
            $table->int('id_layanan');
            $table->string('nama_layanan');
            $table->string('status_permohonan');
            $table->int('id_pic');
            $table->text('alasan');
            $table->string('hash_code');
            $table->string('action');
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
        Schema::dropIfExists('tbl_admin');
    }
}
