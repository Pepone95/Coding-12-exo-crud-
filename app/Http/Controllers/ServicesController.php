<?php

namespace App\Http\Controllers;

use App\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $abouts = about::all();
        // return view('/about', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $service = new Services();
        $service->titre=request('titre');
        $service->description=request('description');
        $service->logo=request('logo');
        $service->save();
        return redirect()->route('services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(services $services)
    {
        $servicess = services::all();
        return view('backOffice.servicesedit', compact('servicess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = services::find($id);
        return view('edit.services', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $services=Services::find($id);
        $services->titre=request('titre');
        $services->description=request('description');
        $services->logo=request('logo');
        $services->save();
        return redirect()->route('services');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services::find($id)->delete();
        return redirect()->back();
    }
}
