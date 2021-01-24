<?php

namespace App\Http\Controllers;

use App\DeliveryTimes;
use Illuminate\Http\Request;

class DeliveryTimesController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo 'store';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeliveryTimes  $deliveryTimes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryTimes $deliveryTimes)
    {
        //
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeliveryTimes  $deliveryTimes
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryTimes $deliveryTimes)
    {
        //
        echo 'destroy';
    }
}
