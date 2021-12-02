<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauveteur;

class SauveteurController extends Controller
{
    public function create(Request $request)
    {
        $sauveteur = new Sauveteur();
        $sauveteur->nom = $request->nom;
        $sauveteur->prenom = $request->prenom;
        $sauveteur->naissance = $request->naissance;
        $sauveteur->mort = $request->mort;
        $sauveteur->description = $request->description;
        $sauveteur->source = $request->source;
        $sauveteur->save();
        return redirect('/');
    }

    public function update(Request $request)
    {
        $sauveteur = Sauveteur::find($request->id);
        $sauveteur->nom = $request->nom;
        $sauveteur->prenom = $request->prenom;
        $sauveteur->naissance = $request->naissance;
        $sauveteur->mort = $request->mort;
        $sauveteur->description = $request->description;
        $sauveteur->source = $request->source;
        $sauveteur->save();
        return redirect('/');
    }

    public function findAll()
    {
        $sauveteurs = Sauveteur::all();
        return view('sauveteur.afficheSauveteur', compact('sauveteurs'));
    }
}