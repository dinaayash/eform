<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AuthController extends Controller
{	
	public function login()
	{
		if (Auth::user()){
		if(Auth::user()->role=='Admin'){
            	return redirect()->route('admin-ku');
	        }
	        else{
	            return redirect()->route('dashboard-ku');
	        }
	    }else{
			return view('auths.login');	    	
	    };
		
	}

	// public function loginq()
	// {
	// 	return view('auths.loginq');
	// }

	// public function masuk(Request $request){

	// 	$data= User::where('username',$request->username)->where('password' ,$request->password)->get();
	// 	dd($data);
	// if(count($data)>0){
	// //berhasil login
	// Auth::guard('User')->LoginUsingId($data[0]['id']);
	// 	return redirect('/dashboard');
	// }else{
	// 	return "login gagal";
	// }

	// }

	public function masuk(Request $request){


		// $data = User::where('username', $request->username)->get();
		
		 $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // dd(Auth::user()->username);
            session(['user' => $credentials]);
            if(Auth::user()->role=='Admin'){
            	return redirect()->route('admin-ku');
	        }
	        else{
	            return redirect()->route('dashboard-ku');
	        }
            
        }
        else
        {
        	return redirect()->route('login-ku');
        }
	
	// if(count($data)>0){
	// //berhasil login
	// 	Auth::guard('web')->LoginUsingId($data[0]['id']);
	// 	session(['user' => $data ]);
	// 	return redirect('/dashboard');
	// }else{
	// 	return "login gagal";
	// }

	}

	// public function masukq(Request $request){

	// 	$data= User::where('username',$request->username)->where('password' ,$request->password)->get();
	// 	dd($data);
	// if(count($data)>0){
	// //berhasil login
	// Auth::guard('User')->LoginUsingId($data[0]['id']);
	// 	return redirect('/dashboard');
	// }else{
	// 	return "login gagal";
	// }

	// }

	public function keluar(){
		if(Auth::guard('web')->check()){
		Auth::guard('web')->logout();
		
		return redirect('/login');
		}
	}
}

// namespace App\Http\Controllers;
// use Auth;

// use Illuminate\Http\Request;


// class AuthController extends Controller
// {
//     public function login()
//     {
//     	return view('auths.login');
//     }

//     public function postlogin(Request $request)
//     {
//     	if(Auth::attempt($request->only('username','password','remember_token'))){
//     		return redirect()->route('dashboard-ku');
//     	}
//     	return redirect()->route('login-ku');
//     }
// }


   