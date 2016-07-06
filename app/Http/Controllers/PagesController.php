<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Study;

class PagesController extends Controller
{
	public function index()
	{
		return view('app');	
	}
	
	public function about()
	{
 		$studies = Study::all();
		return view('custom' , compact('studies'));
	}

	public function studyOverview($id)
	{
		$study = Study::findOrFail($id);
        return view('study_overview' , compact('study'));
	}
	
	public function contact()
	{
		return view('pages.contact');	
	}

}
