<?php

namespace App\Http\Controllers;

use App\Models\Sauvetage;
use Illuminate\Http\Request;

class SauvetageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return redirect("/");

        return redirect(route('sauvetage.nouveau'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sauvetage  $sauvetage
     * @return \Illuminate\Http\Response
     */
    public function show(Sauvetage $sauvetage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sauvetage  $sauvetage
     * @return \Illuminate\Http\Response
     */
    public function edit(Sauvetage $sauvetage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sauvetage  $sauvetage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sauvetage $sauvetage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sauvetage  $sauvetage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sauvetage $sauvetage)
    {
        //
    }

    public function findAll()
    {
        $sauvetages = Sauvetage::all();

		dd($sauvetages);
        return view('sauvetages.afficheSauvetage', compact('sauvetages'));
    }
}
