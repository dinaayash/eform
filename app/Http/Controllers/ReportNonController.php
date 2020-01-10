<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;
// use App\Http\Requests\InsertMahasiswa;
use Exception;

class ReportNonController extends Controller
{
    public function repNonOrganik()
    {
        return view('.report.rep-nonorganik');
    } 
}
