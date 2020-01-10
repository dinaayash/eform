<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;
// use App\Http\Requests\InsertMahasiswa;
use Exception;

class NotPcController extends Controller
{
    public function dataNotpc()
    {
        return view('.notebookpc.notpc');
    } 
    public function createNotpc()
    {
        return view('.notebookpc.tambahnotpc');
    } 
}
