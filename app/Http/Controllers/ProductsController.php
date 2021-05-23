<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo 'index';
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
        echo 'store';
        $product = new Products();
        $product->services_id = $request->input('services_id');
        $product->type_product_id = $request->input('type_product_id');
        $product->description_products = $request->input('description_product');
        $product->lexido = $request->input('lexido');
        // $product->associate_id = $request->input('product_id');

        $fechas = $request->input('date_start');
        $fechae = $request->input('date_end');
        // $fechaf = DateTime::createFromFormat('Y-m-d H:i:s', $fecha);
        $fechast = date('Y-m-d H:i:s',strtotime($fechas));
        $fechaen = date('Y-m-d H:i:s',strtotime($fechae));
        // $fechaf = date('Y-m-d H:i:s',$fecha);
        // dump('store');
        // dd($fechaf);

        //$product->date_service = date('Y-m-d H:i:s',$fechaf); //strtotime($date)
        $product->date_start = $fechast;
        $product->date_end = $fechaen;
        // $product->name_service = $request->input('name_service');
        $product->status = $request->input('status');
        // $product->rate_fixed = $request->input('rate_fixed');
        $product->save();
        return json_encode($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
        echo 'update';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
        echo 'destroy';

    }
}
