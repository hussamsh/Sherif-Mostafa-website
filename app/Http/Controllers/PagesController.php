<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Study;
use Illuminate\Support\Collection;

class PagesController extends Controller
{
	public function about()
	{
		$studies = new Collection(Study::all());
		$studies = $studies->merge(Study::all());
		return view('pages.about' , compact('studies'));
	}

	public function studyOverview($id)
	{
		$study = Study::findOrFail($id);
        return view('pages.study_overview' , compact('study'));
	}
	
	public function contact()
	{
		return view('pages.contact');
	}
	
	public function allStudies()
	{

		$studies = new Collection(Study::all());
		for($i = 0 ; $i < 4 ; $i++){
			$studies->merge(Study::all());
		}
		return view('pages.all_studies' , compact('studies'));
	}
}
