<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;
// use App\Http\Requests\InsertMahasiswa;
use Exception;

class PAAController extends Controller
{
   public function dataPAA()
    {
        return view('.paa.paa');
    } 
    public function createPAA()
    {
        return view('.paa.tambahpaa');
    } 
}
