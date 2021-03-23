<?php

namespace App\Http\Controllers;

use App\Areas;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $result = null;
        $areafindid = $request->areaid;
        
        if (isset($areafindid) && !empty($areafindid)){

            $result = Areas::find($areafindid);

        }else{

            $offset = $request->offset;
            $limit  = $request->limit;
            
            if ((isset($offset) && isset($limit)) && !empty($limit)){
                $result = Areas::offset($offset)->limit($limit)->get();

            }else {
                $result = Areas::all();
            }
            
        }

        return json_encode($result);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //category_id,name,status
        $areas = new Areas();
        $areas->name = $request->input('name');
        $areas->category_id = $request->input('category_id');
        $areas->status = $request->input('status');
        $areas->save();
        return json_encode($areas);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function show(Areas $areas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function edit(Areas $areas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Areas $areaid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $areaid)
    {
        
        $area = Areas::find($areaid);
        $area->category_id = $request->input('category_id');
        $area->name = $request->input('name');
        $area->status = $request->input('status');
        $area->save();
        return json_encode($area);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Areas  $areaid
     * @return \Illuminate\Http\Response
     */
    public function destroy($areaid)
    {
        //
        $area = Areas::find($areaid);
        $area->delete();
    }
}
