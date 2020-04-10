<?php

namespace App\Http\Controllers;

use App\portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
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
        return view('create.portofolio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $portofolio=new portofolio();
        $portofolio->titre=request('titre');
        $portofolio->description2=request('description2');
        $portofolio->img_porto=request('img_porto');
        $portofolio->save();
        return redirect()->route('portofolios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(portofolio $portofolio)
    {
        $portofolios = portofolio::all();
        return view('backOffice.portofolioedit', compact('portofolios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portofolios = portofolio::find($id);
        return view('edit.portofolio', compact('portofolios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $portofolios=portofolio::find($id);
        // $portofolios->description=request('description');
        $portofolios->img_porto=request('img_porto');
        $portofolios->titre=request('titre');
        $portofolios->description2=request('description2');
        $portofolios->save();
        return redirect()->route('portofolios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        portofolio::find($id)->delete();
        return redirect()->back();
    }
}
