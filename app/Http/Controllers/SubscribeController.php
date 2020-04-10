<?php

namespace App\Http\Controllers;

use App\subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
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
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(subscribe $subscribe)
    {
        $subscribes = subscribe::all();
        return view('backOffice.subscribeedit', compact('subscribes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscribes =subscribe::find($id);
        return view('edit.subscribe', compact('subscribes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $subscribes=subscribe::find($id);
        $subscribes->titre=request('titre');
        $subscribes->description=request('description');
        $subscribes->save();
        return redirect()->route('subscribe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        // 
    }
}
