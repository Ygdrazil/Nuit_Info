<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauvetage;
use \Carbon\Carbon;

class SauvetageController extends Controller
{
    public function create(Request $request)
    {
		$request->validate([
			'titre' => 'required',
			'date_sauvetage' => 'required',
			'description' => 'required',
			'source' => 'required',
			'info_sauvetage' => 'required',
			'nb_sauve' => 'required',
			'duree' => 'required',
			'nb_equipage_sauve' => 'nullable',
		]);

        $sauvetage = new Sauvetage();
        $sauvetage->titre = $request->titre;
        $sauvetage->date_sauvetage = $request->date_sauvetage;
        $sauvetage->description = $request->description;
        $sauvetage->source = $request->source;
        $sauvetage->info_sauvetage = $request->info_sauvetage;
        $sauvetage->nb_sauve = $request->nb_sauve;
        $sauvetage->duree = $request->duree;
		$sauvetage->nb_equipage_sauve = $request->nb_equipage_sauve;
        $sauvetage->save();

        return redirect(route('sauvetage.nouveau'));
    }

    public function update(Request $request)
    {
        //
    }

    public function findAll()
    {
		$interval = 25;

		$res = [];

        $sauvetages = Sauvetage::orderBy('date_sauvetage')->get();
		$min = Carbon::createFromFormat('Y-m-d', $sauvetages[0]->date_sauvetage)->year;
		$min -= $min%$interval;
		$max = $min + $interval;

		foreach ($sauvetages as $sauvetage) {
			$y = Carbon::createFromFormat('Y-m-d', $sauvetage->date_sauvetage)->year;
			if ($y >= $min && $y <= $max) {
				$res[$min][] = $sauvetage;
			} else {
				$min = $max;
				$max += $interval;
				$res[$min][] = $sauvetage;
			};
		};

		dd($res);

        return view('sauvetage.afficheSauvetages', compact('sauvetages'));
    }

	function findOne($sauvetage_id)
	{
		$sauvetage = Sauvetage::findOrFail($sauvetage_id);
		return view('sauvetage.afficheSauvetage', compact('sauvetage'));
	}
}