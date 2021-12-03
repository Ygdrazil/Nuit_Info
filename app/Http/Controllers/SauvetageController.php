<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauvetage;

class SauvetageController extends Controller
{
    public function create(Request $request)
    {
        $sauvetage = new Sauvetage();
        $sauvetage->description = $request->description;
        $sauvetage->source = $request->source;
        $sauvetage->titre = $request->titre;
        $sauvetage->date_sauvetage = $request->date_sauvetage;
        $sauvetage->info_sauvetage = $request->info_sauvetage;
        $sauvetage->nb_sauve = $request->nb_sauve;
        $sauvetage->duree = $request->duree;
        $sauvetage->save();

        return redirect(route('sauvetage.nouveau'));
    }

    public function update(Request $request)
    {
        //
    }

    public function findAll()
    {
        $sauvetages = Sauvetage::all();
        return view('sauvetage.afficheSauvetages', compact('sauvetages'));
    }

	function findOne($sauvetage_id)
	{
		$sauvetage = Sauvetage::findOrFail($sauvetage_id);
		return view('sauvetage.afficheSauvetage', compact('sauvetage'));
	}
}
