<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
 
use App\Mail\FormMail;
use Illuminate\Support\Facades\Mail;
 
class FormMailController extends Controller
{
	public function index(){
 
		Mail::to("testing@gmail.com")->send(new FormMail());
 
		return "Email telah dikirim";
 
	}
 
}