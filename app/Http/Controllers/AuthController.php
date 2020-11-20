<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller{

	function showLogin(){
		return view('login2');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
		}else{
			return back()->with('danger', 'Login Gagal, silahkan cek email dan password anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('login2');
	}

	function registration(){
		
	}

	function forgotPassword(){
		
	}
}