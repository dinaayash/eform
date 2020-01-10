<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nipg', 10);
            $table->string('name');
            $table->string('username',50)->index();
            $table->string('email')->unique();
            $table->string('jabatan')->nullable();
            $table->string('divisi')->nullable();
            $table->string('role', 20);
            $table->string('perusahaan', 100)->nullable();
            $table->string('foto', 100)->nullable();
            $table->string('status', 20);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
