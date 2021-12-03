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
		$sauveteurs = Sauveteur::all();
		$alpha = [];

		foreach ($sauveteurs as $sauveteur) {
			array_push($alpha, substr($sauveteur->nom, 0, 1));
		};

		$alpha = array_unique($alpha);
		sort($alpha);

		dd($alpha);

        return view('sauveteur.afficheSauveteur', compact('sauveteurs'));
    }
}