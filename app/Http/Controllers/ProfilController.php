<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Exception;
use Auth;

class ProfilController extends Controller
{
    public function index()
   {
   		$User = User::all();
   		return view('profil.index', ['User' => $User]);
   }
    public function indexdet()
   {
   		$User = User::all();
   		return view('profil.index-detail', ['User' => $User]);
   }
}
