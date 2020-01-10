<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;
// use App\Http\Requests\InsertMahasiswa;
use Exception;

class ReportOrganikController extends Controller
{
    public function repOrganik()
    {
        return view('.report.rep-organik');
    } 
}
