<?php

namespace App\Http\Controllers;

use App\Products;
use Carbon\Carbon;
use App\TypeProducts;
use Exception;
use Date;
use DateTime;
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
        try {

            $areafindid = $request->areas_id;
            //dd($areafindid);
            $v = $request->selectedDateStart;
            // dump(gettype($v));
            // $time = DateTime::createFromFormat('m-d-Y', '10-16-2003')->format('Y-m-d');
            // $dateDE = "16/10/2013";
            // $time = \DateTime::createFromFormat("d.m.Y", $v);
            $d = new DateTime($v);

            $timestamp = $d->getTimestamp(); // Unix timestamp
            $time = $d->format('Y-m-d');
            //$time = strtotime($v);
            dump($time);dump($timestamp);
            $newformat = date('Y-m-d',$time);
            //$date=date_create($selectedDateStart);
            // $date=date_create($v);
            // echo date_format($date,"Y-m-d H:i:s");
            //dump(date_format($selectedDateStart,"Y/m/d H:i:s"));
            dd($newformat);
            //$d = date('Y-m-d H:i:s',strtotime($selectedDateStart));
            //$date = Carbon::now();
            //dd($d);
            // $selectedDateStart= Carbon::createFromFormat('d-m-Y H:i:s',  $selectedDateStart);
            // $carbon = new Carbon($selectedDateStart);
            //dd($date);

            //
            //printf("Right now is %s", Carbon::now()->toDateTimeString());
            //printf("Right now in Vancouver is %s", Carbon::now('Europa/Madrid')); // automatically converted to string
            // $tomorrow = Carbon::now()->addDay();
            // $lastWeek = Carbon::now()->subWeek();
            // $cDate = Carbon::create($selectedDateStart);
            // dd($cDate);
            // 
            // dump(date("m",$selectedDateStart));
            // dump(date("d",$selectedDateStart));
            //dump(Carbon::create($request->selectedDateStart)->addDays(15)->toDateTimeString());
            dump(Carbon::now()->toDateTimeString());
            // dump($tomorrow->date_format('Y/m/d'));
            // Carbon embed 822 languages:
            //echo $tomorrow->locale('es')->isoFormat('dddd, MMMM Do YYYY, h:mm');
            dump(' ');
            //echo $tomorrow->locale('ar')->isoFormat('dddd, MMMM Do YYYY, h:mm');
            dump(' ');

            //dd('stoip');

            
            //echo strtotime("now"), "\n";
            dump($areafindid);
            //dump(date("Y-m-d",$selectedDateStart));
            $fecha_venci = date("Y-m-d", strtotime("$selectedDateStart + 10 days"));
            //dd($fecha_venci);

            if (isset($areafindid) && !empty($areafindid)){

                $type_product = TypeProducts::where('areas_id','=',$areafindid)
                    ->get();

                //return json_encode($type_product);
                //services_id, type_product_id, lexido, description_product, date_start, date_end, status    
                //Para cada type Product add in Products
                
                foreach ($type_product as $tp) {    

                    if (isset($tp->deadlines)){
                        dump($tp->deadlines);
                    }
                    $product = new Products();
                    // $product->services_id = $request->input('services_id');
                    // $product->type_product_id = $request->input('type_product_id');
                    // $product->description_products = $request->input('description_product');
                    // $product->lexido = $request->input('lexido');
                    // // $product->associate_id = $request->input('product_id');

                    // $fechas = $request->input('date_start');
                    // $fechae = $request->input('date_end');
                    // // $fechaf = DateTime::createFromFormat('Y-m-d H:i:s', $fecha);
                    // $fechast = date('Y-m-d H:i:s',strtotime($fechas));
                    // $fechaen = date('Y-m-d H:i:s',strtotime($fechae));
                    // // $fechaf = date('Y-m-d H:i:s',$fecha);
                    // // dump('store');
                    // // dd($fechaf);

                    // //$product->date_service = date('Y-m-d H:i:s',$fechaf); //strtotime($date)
                    // $product->date_start = $fechast;
                    // $product->date_end = $fechaen;
                    // // $product->name_service = $request->input('name_service');
                    // $product->status = $request->input('status');
                    // // $product->rate_fixed = $request->input('rate_fixed');
                    // $product->save();
                    
                }
                return json_encode($product);
            }    
        } catch (Exception $e) {

            //DB::rollback();
            $this->error($e->getMessage() . ' :: ' . $e->getLine());

            $this->error("{$e->getFile()}:{$e->getLine()}");

            // $fnError(
            //     'Error en proceso de captura de informacion derivada por TRIXX-TOLK',
            //     "Procesando queue:  {$message->getMessageText()}",
            //     'Error. ' . $e->getMessage()
            // );
        }
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
