<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function index()
	{
		return view('app');	
	}	


	public function about()
	{
		$name = "Hossam Sherif" ;
		return view('custom', compact('name'));
	}
	
	public function contact()
	{
		return view('pages.contact');	
	}

}
