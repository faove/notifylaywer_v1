<?php

namespace App\Http\Controllers;

use DateTime;
use App\Services;
use Carbon\Carbon;
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
    public function show(Request $request, $serviceid)
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
    public function getServiceAssocAll(Request $request)
    {
        $result = null;
        $result = Services::select('services.id','services.category_id',
        'services.areas_id','services.associate_id','areas.name AS name_areas',
        'associates.name AS name_associates','categories.name AS name_categories',
        'services.client_id','services.gross_amount','services.date_service')
        ->join('associates', 'services.associate_id', '=', 'associates.id')
        ->join('categories', 'services.category_id', '=', 'categories.id')
        ->join('areas', 'services.areas_id', '=', 'areas.id')
        ->join('clients', 'services.client_id', '=', 'clients.id')
        ->get();
            //->dump();
            //falta
            //'associates.name' ,'clients.email'
            // dump($result);


        return json_encode($result);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getServiceAssoc(Request $request, $serviceid)
    {
        $result = null;
        $servicefindid = $request->serviceid;


        if (isset($servicefindid) && !empty($servicefindid)){
            //dump($request->serviceid);
            //dump($servicefindid);

            $result = Services::select('services.id','services.category_id',
            'services.areas_id','services.associate_id','areas.name AS name_areas',
            'associates.name AS name_associates','categories.name AS name_categories',
            'services.client_id','services.gross_amount','services.date_service')
            ->join('associates', 'services.associate_id', '=', 'associates.id')
            ->join('categories', 'services.category_id', '=', 'categories.id')
            ->join('areas', 'services.areas_id', '=', 'areas.id')
            ->join('clients', 'services.client_id', '=', 'clients.id')
            ->where('services.client_id', $servicefindid)
            ->get();
            //->dump();
            //falta
            //'associates.name' ,'clients.email'
            // dump($result);

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
        $service->category_id = $request->input('category_id');
        $service->areas_id = $request->input('areas_id');
        $service->associate_id = $request->input('associate_id');
        $service->client_id = $request->input('client_id');
        $fecha = $request->input('date_service');
        $fechaf = Carbon::parse($fecha)->format('Y-m-d H:m:s');
        //$fechaf = Carbon::parse($fecha,'UTC');
        $service->date_service = $fechaf;
        $service->gross_amount = $request->input('gross_amount');
        $service->save();
        return json_encode($service);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $serviceid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$serviceid)
    {
        $service = Services::find($serviceid);
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
     * @param  \App\Services  $serviceid
     * @return \Illuminate\Http\Response
     */
    public function destroy($serviceid)
    {
        $service = Services::find($serviceid);
        $service->delete();
    }

}
