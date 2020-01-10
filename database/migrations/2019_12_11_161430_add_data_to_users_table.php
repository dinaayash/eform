<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Authentic;
use App\User;

class AddDataToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $dataAuthentic = Authentic::all();
        foreach ($dataAuthentic as $data) {
            $user = new User;
            $user->nipg = $data->nipg;
            $user->username = $data->username;
            $user->name = $data->nama;
            $user->email = $data->email;
            $user->jabatan = $data->jabatan;
            $user->divisi = $data->divisi;
            $user->role = $data->role;
            $user->perusahaan = $data->perusahaan;
            $user->foto = $data->foto;
            $user->status = $data->status;
            $user->password = $data->password;
            $user->save();

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $dataAuthentic = User::all();
        // foreach ($dataAuthentic as $data) {
        //     $data->delete();
        // }
    }
}
