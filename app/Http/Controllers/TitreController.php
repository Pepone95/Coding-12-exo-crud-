<?php

namespace App\Http\Controllers;

use App\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TitreController extends Controller
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
    public function create()
    {
        //
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
     * @param  \App\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titres=Titre::find($id);
        return view('backOffice.aboutedit', compact('titres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $titres=Titre::find($id);
        $titres->titre = request('titre');
        $titres->description = request('description');
        $titres->save();
        return Redirect::to('/#about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        //
    }
}
