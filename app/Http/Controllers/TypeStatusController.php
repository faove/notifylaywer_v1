<?php

namespace App\Http\Controllers;

use App\TypeStatus;
use Illuminate\Http\Request;

class TypeStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        dd('indes');
        $result = null;
        

        $result = TypeStatus::all();
            

        return json_encode($result);
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
     * @param  \App\TypeStatus  $typeStatus
     * @return \Illuminate\Http\Response
     */
    public function show(TypeStatus $typeStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeStatus  $typeStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeStatus $typeStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeStatus  $typeStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeStatus $typeStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeStatus  $typeStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeStatus $typeStatus)
    {
        //
    }
}
