<?php

namespace App\Http\Controllers;

use App\Matters;
use Illuminate\Http\Request;

class MattersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Matters::all();
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
        $matters = new Matters();
        $matters->areas_id = $request->input('areas_id');
        $matters->name = $request->input('name');
        $matters->deadlines = $request->input('deadlines');
        $matters->save();
        return json_encode($matters);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matters  $matters_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matters_id)
    {
        //
        $matters = Matters::find($matters_id);
        $matters->areas_id = $request->input('areas_id');
        $matters->name = $request->input('name');
        $matters->deadlines = $request->input('deadlines');
        $matters->save();
        return json_encode($matters);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matters  $matters_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($matters_id)
    {
        //
        $users = Matters::find($matters_id);
        $users->delete();
    }
}
