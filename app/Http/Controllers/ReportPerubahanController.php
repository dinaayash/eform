<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;
// use App\Http\Requests\InsertMahasiswa;
use Exception;

class ReportPerubahanController extends Controller
{
    public function repPerubahan()
    {
        return view('.report.rep-perubahan');
    } 
}
