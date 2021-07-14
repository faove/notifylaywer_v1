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

            $date_start = Carbon::now();

            if (isset($areafindid) && !empty($areafindid)){

                $type_product = TypeProducts::where('areas_id','=',$areafindid)
                    ->get();

                $days_holidays = Holiday::all();
                foreach($days_holidays as $key=>$values){
                    $daysFree[] = $values['date'];
                }
                
                foreach ($type_product as $tp) {    

                    if (isset($tp->deadlines)){
                        //dd($tp->deadlines);
                    }
                    $product = new Products();
                    $product->services_id = $request->input('services_id');
                    $product->type_product_id = $request->input('type_product_id');
                    $product->description_products = $tp->name;
                    
                    while (($date_start->dayOfWeekIso == 6) || ($date_start->dayOfWeekIso == 7)){
                        $date_start->addDay(1);
                    }
                    $date_add =$date_start->format('Y-m-d 00:00:00');
                    $product->date_start = $date_add;
                            $date_addsum = $date_start;
                    $product->save(); 

                    $i=0;

                    while ($i < $tp->deadlines) {
                        
                        if (($date_addsum->dayOfWeekIso != 6) && ($date_addsum->dayOfWeekIso !== 7)){
                            if (!in_array($date_addsum->format('Y-m-d'), $daysFree)){
                                
                                $i++;
                                $date_end = $date_addsum->format('Y-m-d 23:59:00');
                            }
                            
                        }
                        $date_addsum = $date_start->addDay(1);
                    }
                    
                    $product->date_end = isset($date_end) ? $date_end :null;
                   
                    $product->save();
                    
                    $date_start = $date_addsum;
                    
                    
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
}
