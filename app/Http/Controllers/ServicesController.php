<?php

namespace App\Http\Controllers;

use DateTime;
use App\Services;
use App\Associates;
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

            $result = Services::where('client_id', $servicefindid)->get();

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
    public function show(Request $request)
    {
        // dump('show');

        $result = null;
        $servicefindid = $request->serviceid;
        // dump('services_id');
        // dump($request->serviceid);
        // dump($servicefindid);

        if (isset($servicefindid) && !empty($servicefindid)){

            $result = Services::where('client_id', $servicefindid)->get();

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
    public function getServiceAssoc(Request $request)
    {
        $result = null;
        $servicefindid = $request->serviceid;
        //dd('services_id');
        dump($servicefindid);
        

        if (isset($servicefindid) && !empty($servicefindid)){
            //dump($request->serviceid);
            //dump($servicefindid);
            $result = Services::select('associates.name','services.date_service',
            'services.rate_fixed','clients.name','clients.last_name','clients.email')
            ->join('associates', 'services.associate_id', '=', 'associates.id')
            ->join('clients', 'services.client_id', '=', 'clients.id')
            ->where('services.client_id', $servicefindid)
            ->get();
            // ->dump();

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
        // dump('store');
        //     type_services_id, mode_services_id, areas_id, associate_id,
        // client_id, product_id,name_service, gross_amount, rate_variable, date_service
        $service = new Services();
        $service->category_id = $request->input('category_id');
        $service->areas_id = $request->input('areas_id');
        $service->associate_id = $request->input('associate_id');
        $service->client_id = $request->input('client_id');
        $service->associate_id = $request->input('product_id');

        $fecha = $request->input('date_service');
        // $fechaf = DateTime::createFromFormat('Y-m-d H:i:s', $fecha);
        $fechaf = date('Y-m-d H:i:s',strtotime($fecha));
        // $fechaf = date('Y-m-d H:i:s',$fecha);
        // dump('store');
        // dd($fechaf);

        //$service->date_service = date('Y-m-d H:i:s',$fechaf); //strtotime($date)
        $service->date_service = $fechaf;
        $service->name_service = $request->input('name_service');
        $service->gross_amount = $request->input('gross_amount');
        $service->rate_fixed = $request->input('rate_fixed');
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
        $service->category_id = $request->input('category_id');
        $service->areas_id = $request->input('areas_id');
        $service->associate_id = $request->input('associate_id');
        $service->client_id = $request->input('client_id');
        $service->associate_id = $request->input('product_id');
        $service->date_service = $request->input('date_service');
        $service->name_service = $request->input('name_service');
        $service->gross_amount = $request->input('gross_amount');
        $service->rate_fixed = $request->input('rate_fixed');
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
