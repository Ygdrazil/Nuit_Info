<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soumission;

class SoumissionController extends Controller
{
	function add(Request $request)
	{
		$request->validate([
			'description' => 'required',
			'id' => 'required',
			'type' => 'required'
		]);

		$type = $request->input('type');

		$soumission = new Soumission();
		
		$soumission->description = $request->input('description');
		$soumission->$type = $request->input('id');

		$soumission->save();

		return back();
	}
}