<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bateau;

class BateauController extends Controller
{
    public function create(Request $request)
    {
		$request->validate([
			'nom' => 'required',
			'annee_debut' => 'required',
			'dateNaissance' => 'nullable',
			'dateMort' => 'nullable',
			'description' => 'required',
			'source' => 'required',
		]);

        $bateau = new Bateau();
        $bateau->nom = $request->nom;
        $bateau->prenom = $request->prenom;
        $bateau->naissance = $request->dateNaissance;
        $bateau->mort = $request->dateMort;
        $bateau->description = $request->description;
        $bateau->source = $request->source;
        $bateau->save();

        return redirect(route('bateau.nouveau'));
    }

    public function update(Request $request)
    {
		//
    }

    public function findAll()
    {
		$alphas = [];
		foreach (Bateau::all() as $bateau) $alphas[substr($bateau->nom, 0, 1)][] = $bateau;
		ksort($alphas);
		
        return view('bateau.afficheBateaux', compact('alphas'));
    }

	function findOne($bateau_id)
	{
		$bateau = Bateau::findOrFail($bateau_id);
		return view('bateau.afficheBateaux', compact('bateau'));
	}
}