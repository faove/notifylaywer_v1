<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public $search = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Services::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Services();
        $service->areas_id = $request->input('areas_id');
        $service->associate_id = $request->input('associate_id');
        $service->client_id = $request->input('client_id');
        $service->associate_id = $request->input('associate_id');
        $service->date_service = $request->input('date_service');
        $service->save();
        return json_encode($service);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$services_id)
    {
        $service = Services::find($services_id);
        $service->areas_id = $request->input('areas_id');
        $service->associate_id = $request->input('associate_id');
        $service->client_id = $request->input('client_id');
        $service->associate_id = $request->input('associate_id');
        $service->date_service = $request->input('date_service');
        $service->save();
        return json_encode($service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($services_id)
    {
        $service = Services::find($services_id);
        $service->delete();
    }

}