<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getProfile(){
		return view('pages.profile');
	}
	
	public function getMonitoring(){
		return view('pages.monitoring');
	}
	
	
	
}
