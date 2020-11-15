<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showAbout(){
		return view('about2');
	}

	function showBeliJus(){
		return view('belijus2');
	}

	function showTestimoni(){
		return view('testimoni2');
	}

	function showKontakKami(){
		return view('kontakkami2');
	}

}
