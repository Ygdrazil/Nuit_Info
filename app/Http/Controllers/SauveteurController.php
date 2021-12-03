<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauveteur;

class SauveteurController extends Controller
{
    public function create(Request $request)
    {
		$request->validate([
			'nom' => 'required',
			'prenom' => 'required',
			'dateNaissance' => 'nullable',
			'dateMort' => 'nullable',
			'description' => 'required',
			'source' => 'required',
		]);

        $sauveteur = new Sauveteur();
        $sauveteur->nom = $request->nom;
        $sauveteur->prenom = $request->prenom;
        $sauveteur->naissance = $request->dateNaissance;
        $sauveteur->mort = $request->dateMort;
        $sauveteur->description = $request->description;
        $sauveteur->source = $request->source;
        $sauveteur->save();

        return redirect(route('sauveteur.nouveau'));
    }

    public function update(Request $request)
    {
		$request->validate([
			'nom' => 'required',
			'prenom' => 'required',
			'dateNaissance' => 'nullable',
			'dateMort' => 'nullable',
			'description' => 'required',
			'source' => 'required',
		]);

        $sauveteur = Sauveteur::find($request->id);
        $sauveteur->nom = $request->nom;
        $sauveteur->prenom = $request->prenom;
        $sauveteur->naissance = $request->dateNaissance;
        $sauveteur->mort = $request->dateMort;
        $sauveteur->description = $request->description;
        $sauveteur->source = $request->source;
        $sauveteur->save();
        
		return redirect(route('sauveteur.nouveau'));
    }

    public function findAll()
    {
		$alphas = [];
		foreach (Sauveteur::all() as $sauveteur) $alphas[substr($sauveteur->nom, 0, 1)][] = $sauveteur;
		ksort($alphas);
		
        return view('sauveteur.afficheSauveteurs', compact('alphas'));
    }

	function findOne($sauveteur_id)
	{
		$sauveteur = Sauveteur::findOrFail($sauveteur_id);
		return view('sauveteur.afficheSauveteur', compact('sauveteur'));
	}
}