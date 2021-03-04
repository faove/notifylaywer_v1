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
    public function index(Request $request)
    {
        // dump('index');

        $result = null;
        $servicefindid = $request->serviceid;
        // dump('services_id');
        // dump($request->serviceid);
        // dump($servicefindid);

        if (isset($servicefindid) && !empty($servicefindid)){

            $result = Services::where('client_id', $servicefindid);

        }else{

            $offset = $request->offset;
            $limit  = $request->limit;
            
            if ((isset($offset) && isset($limit)) && !empty($limit)){
                $result = Services::offset($offset)->limit($limit)->get();

            }else {
                $result = Services::all();
            }
            
        }

        return json_encode($result);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getservice(Request $request)
    {
        $result = null;
        $servicefindid = $request->serviceid;
        // dump('services_id');
        

        if (isset($servicefindid) && !empty($servicefindid)){
        //     dump($request->serviceid);
        // dump($servicefindid);
            $result = Services::where('client_id','=', $servicefindid)->get();;

        }else{

            $offset = $request->offset;
            $limit  = $request->limit;
            
            if ((isset($offset) && isset($limit)) && !empty($limit)){
                $result = Services::offset($offset)->limit($limit)->get();

            }else {
                $result = Services::all();
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
