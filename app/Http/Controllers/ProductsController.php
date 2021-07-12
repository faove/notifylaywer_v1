<?php

namespace App\Http\Controllers;

use App\Products;
use Carbon\Carbon;
use App\TypeProducts;
use App\Holiday;
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
            echo 'store';
            
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createProducts(Request $request)
    {
        try {
            $daysFree = array();
            $areafindid = $request->areas_id;
            //dd($areafindid);
            // $v = $request->selectedDateStart;
            // dd($v);

            $date_start = Carbon::now();
            //$date_start = date_create_from_format('d/m/Y', $request->selectedDateStart);

            //$date_add = date_create_from_format('d/m/Y', $request->selectedDateStart);
            //$date->getTimestamp();
            //dd($date->getTimestamp());
            // $time = DateTime::createFromFormat('m-d-Y', '10-16-2003')->format('Y-m-d');
            // $dateDE = "16/10/2013";
            // $time = \DateTime::createFromFormat("d.m.Y", $v);
            //$d = new DateTime($v);
            //$date = new DateTime(strtotime($v));
            //dump($date->format('Y-m-d H:i:s'));
            // dd('stop');

           
           
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
            // dump($tomorrow->date_format('Y/m/d'));
            // Carbon embed 822 languages:
            //echo $tomorrow->locale('es')->isoFormat('dddd, MMMM Do YYYY, h:mm');
            //dump(' ');
            //echo $tomorrow->locale('ar')->isoFormat('dddd, MMMM Do YYYY, h:mm');
            //dump(' ');

            //dd('stoip');

            
            //echo strtotime("now"), "\n";
            //dump($areafindid);
            //dump(date("Y-m-d",$selectedDateStart));
//            $fecha_venci = date("Y-m-d", strtotime("$selectedDateStart + 10 days"));
            //dd($fecha_venci);

            if (isset($areafindid) && !empty($areafindid)){

                $type_product = TypeProducts::where('areas_id','=',$areafindid)
                    ->get();

                $days_holidays = Holiday::all();
                foreach($days_holidays as $key=>$values){
                    $daysFree[] = $values['date'];
                    // dump($key,$values['date']);
                }
                // dump($days_holidays);
                    
                
                // dd('stop',$daysFree);

                //return json_encode($type_product);
                //services_id, type_product_id, lexido, description_product, date_start, date_end, status    
                //Para cada type Product add in Products
                
                foreach ($type_product as $tp) {    

                    if (isset($tp->deadlines)){
                        //dump($tp->deadlines);
                    }
                    $product = new Products();
                    $product->services_id = $request->input('services_id');
                    $product->type_product_id = $request->input('type_product_id');
                    $product->description_products = $tp->name;
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
                    $date_add =$date_start;
                    
                    // //$product->date_service = date('Y-m-d H:i:s',$fechaf); //strtotime($date)
                    dump('date start',$date_start->format('d-m-Y'),$date_add);
                    // dump($date_start->format('d-m-Y'));
                    $product->date_start = $date_add;
                   // $product->save(); 
                   // unset($date_start);
                    // $date_add = $date_start;
                    // dd($date_add);

                    //strtoupper($date_start->isoFormat('dd'));
                    //dump('date_start',$date_start);
                    //dump('Sumar>>>',$tp->deadlines);

                    $i=0;

                    while ($i < $tp->deadlines) {
                        
                        $date_addsum = $date_start->addDay(1);
                        
                        if (($date_addsum->dayOfWeekIso != 6) && ($date_addsum->dayOfWeekIso !== 7)){
                            //dump($date_addsum->format('Y-m-d'));
                            // dump('=',$daysFree);
                           // 
                            if (!in_array($date_addsum->format('Y-m-d'), $daysFree)){
                                $i++;
                                 $date_end = $date_addsum->format('Y-m-d 23:59:00');
                                //  dump('date_addsum',$date_addsum->format('Y-m-d 23:59:00'));
                            }
                            
                        }
                    }
                    
                   // dd($date_start->format('d-m-Y'));
                    // dump('date start++');
                    // dump($date_start->format('d-m-Y'));
                   // dump('date end');
                   // dump($date_end->format('d-m-Y'));
                    $product->date_end = isset($date_end) ? $date_end :null;
                   
                    // $product->date_end = date('d/m/Y', strtotime($date.'+1 day'));new DateTime("+1 day $date")
                    //$date = new DateTime($date);
                    //$date_end=$date_add->modify('+'.$tp->deadlines.' day');
                    //dump('date_add',$date_add);
                    //$Date2 = $date->format('d/m/Y');
                    // $product->date_end = $date_end;
                    //dump('date_end',$date_end);
                    // // $product->name_service = $request->input('name_service');
                    // $product->status = $request->input('status');
                    // // $product->rate_fixed = $request->input('rate_fixed');
                    $product->save();
                    
                    $date_start = $date_add;
                    //$date_add=$date_add;
                    dump($i, $date_add);
                    
                }
                dd('date_start',$date_start,$date_end);
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
}
