<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;
// use App\Http\Requests\InsertMahasiswa;
use Exception;

class TipePerubahanController extends Controller
{
    public function dataTiper()
    {
        return view('.tipe perubahan.tperubahan');
    } 
    public function createTiper()
    {
        return view('.tipe perubahan.tambahtperubahan');
    } 
}
