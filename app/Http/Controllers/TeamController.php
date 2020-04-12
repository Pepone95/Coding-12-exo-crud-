<?php

namespace App\Http\Controllers;

use App\team;
use Illuminate\Http\Request;

class TeamController extends Controller
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
        return view('create.team');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teams=new team();
        $teams->name=request('name');
        $teams->description=request('description');
        $teams->img_team=request('img_team');
        $teams->save();
        return redirect()->route('teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        $teams = team::all();
        return view('backOffice.teamedit', compact('teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = team::find($id);
        return view('edit.team', compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $teams=team::find($id);
        $teams->name=request('name');
        $teams->description=request('description');
        $teams->img_team=request('img_team');
        $teams->save();
        return redirect()->route('teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        team::find($id)->delete();
        return redirect()->back();
    }
}
