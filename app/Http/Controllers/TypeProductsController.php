<?php

namespace App\Http\Controllers;

use App\TypeProducts;
use Illuminate\Http\Request;

class TypeProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TypeProducts::all();

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
        $TypeProducts = new TypeProducts();
        $TypeProducts->areas_id = $request->input('areas_id');
        $TypeProducts->name = $request->input('name');
        $TypeProducts->deadlines = $request->input('deadlines');
        $TypeProducts->save();
        return json_encode($TypeProducts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeProducts  $typeProducts
     * @return \Illuminate\Http\Response
     */
    public function show(TypeProducts $typeProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeProducts  $typeProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeProducts $typeProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeProducts  $typeProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeProducts $typeProducts)
    {
        //
        // $TypeProducts = TypeProducts::find($TypeProducts_id);
        // $TypeProducts->areas_id = $request->input('areas_id');
        // $TypeProducts->name = $request->input('name');
        // $TypeProducts->deadlines = $request->input('deadlines');
        // $TypeProducts->save();
        // return json_encode($TypeProducts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeProducts  $typeProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeProducts $typeProducts)
    {
        // //
        // $users = TypeProducts::find($TypeProducts_id);
        // $users->delete();
    }
}
