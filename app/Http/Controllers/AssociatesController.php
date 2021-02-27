<?php

namespace App\Http\Controllers;

use App\Associates;
use Illuminate\Http\Request;

class AssociatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dump('index');
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
        $associates = new Associates();
        $associates->name = $request->input('name');
        $associates->last_name = $request->input('last_name');
        $associates->dni = $request->input('dni');
        $associates->email = $request->input('email');
        $associates->address = $request->input('address');
        $associates->save();
        return json_encode($associates);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Associates  $associates
     * @return \Illuminate\Http\Response
     */
    public function show(Associates $associates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Associates  $associates
     * @return \Illuminate\Http\Response
     */
    public function edit(Associates $associates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Associates  $associates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Associates $associates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Associates  $associates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Associates $associates)
    {
        //
    }
}
