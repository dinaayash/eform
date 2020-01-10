<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HashController extends Controller
{
    public function index()
    {
    	$hash_code = Hash::make('rahasia');
    	echo $hash_code;
    }
}
