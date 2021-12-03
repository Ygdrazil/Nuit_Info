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
			'description' => 'required',
		]);

        $bateau = new Bateau();
        $bateau->nom = $request->nom;
        $bateau->annee_debut = $request->annee_debut;
        $bateau->description = $request->description;
        $bateau->save();

        return redirect(route('bateau.nouveau'));
    }

    public function update(Request $request)
    {
		//
    }

    public function findAll()
    {
		$bateaux = Bateau::all();

		dd($bateaux);
		
        return view('bateau.afficheBateaux', compact('alphas'));
    }

	function findOne($bateau_id)
	{
		$bateau = Bateau::findOrFail($bateau_id);
		return view('bateau.afficheBateau', compact('bateau'));
	}
}