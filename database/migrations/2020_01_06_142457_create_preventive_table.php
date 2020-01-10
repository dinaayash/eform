<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreventiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preventive', function (Blueprint $table) {
            $table->bigIncrements('id_preventive');
            $table->string('no_preventive');
            $table->timestamp('tgl_preventive');
            $table->string('nama_user');
            $table->string('satuan_kerja');
            $table->string('no_hbb');
            $table->string('computer_name');
            $table->string('jenis_perangkat');
            $table->string('tahun');
            $table->string('brand');
            $table->string('tipe');
            $table->string('serial_number');
            $table->string('memory');
            $table->string('hardisk');
            $table->string('processor');
            $table->string('keyboard_mouse');
            $table->string('power_supply');
            $table->string('monitor');
            $table->string('baterai');
            $table->string('extension');
            $table->string('merk');
            $table->string('jenis_ip_phone');
            $table->string('handset');
            $table->string('test_call');
            $table->string('mic');
            $table->string('speaker');
            $table->string('mac_address');
            $table->string('ip_address');
            $table->string('test_ping');
            $table->string('system_operasi');
            $table->string('type_so');
            $table->string('instal_ulang_so');
            $table->string('office');
            $table->string('type_office');
            $table->string('instal_ulang_office');
            $table->string('browser');
            $table->string('fusion');
            $table->string('zip');
            $table->string('adobe');
            $table->string('anti_virus');
            $table->string('cookies');
            $table->text('software_tambahan');
            $table->string('tahap');
            $table->string('tahun_prev');
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
        Schema::dropIfExists('preventive');
    }
}
