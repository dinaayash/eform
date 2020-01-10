<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;
// use App\Http\Requests\InsertMahasiswa;
use Exception;

class AplikasiController extends Controller
{
    public function dataAplikasi()
    {
        return view('.aplikasi.aplikasi');
    } 
    public function createAplikasi()
    {
        return view('.aplikasi.tambahaplikasi');
    } 
}
