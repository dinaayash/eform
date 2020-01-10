<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailHakAksesNonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_hak_akses_nons', function (Blueprint $table) {
            $table->bigIncrements('id_hak_akses_non')->index();
            // $table->string('hash_code', 50)->index();
            $table->string('id_layanan',10);
            $table->string('keterangan')->nullable();
            $table->date('masa_berlaku');
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
        Schema::dropIfExists('detail_hak_akses_nons');
    }
}
