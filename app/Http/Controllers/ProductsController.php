<?php

namespace App\Http\Controllers;

use App\User;
use App\Holiday;
use App\Products;
use App\TypeProducts;

use Date;
use DateTime;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->productid)){
            $product = Products::where('services_id','=',$request->productid)->get();   
        }
        //dump($product);
        return json_encode($product);

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
            $daysFree = array();
            $result_product = array();
            $areafindid = $request->areas_id;
            // services_id, area_id, category_id, selected_date_start, type_product_id, 
            // lexido, description_product,date_start,status
            // dispatch(addProduct(props.servi_id, props.areas_id, props.category_id, 
            // selectedDateStart, tipoproduct, lexico, description_product, 
            // format(toDate(selectedDateStart), 'yyyy/MM/dd'), status));  
            $date_start = Carbon::now();

            if (isset($areafindid) && !empty($areafindid)){
                
                $type_product = TypeProducts::where('areas_id','=',$areafindid)
                    ->get();

                $days_holidays = Holiday::all();
                //Creamos un array de los dias libres
                foreach($days_holidays as $key=>$values){
                    $daysFree[] = $values['date'];
                }
                
                foreach ($type_product as $tp) {    
                   
                    if (isset($tp->deadlines)){
                        //dd($tp->deadlines);
                    }
                    // $product = new Products();
                    // $product =  Products::updateOrCreate();
                    // $product->services_id = $request->input('services_id');
                    // $product->type_product_id = $request->input('type_product_id');
                    
                    // $product->description_product = $tp->name;
                    //Si es sabado o Domingo increment
                    while (($date_start->dayOfWeekIso == 6) || ($date_start->dayOfWeekIso == 7)){
                        $date_start->addDay(1);
                    }
                    // dump('description_product', $tp->name);
                    // dump('date_start',$date_start);
                    //Formatemos el primer day en 00:00:00
                    $date_add =$date_start->format('Y-m-d 00:00:00');
                    

                    // $product->date_start = $date_add;
                    
                    $date_addsum = $date_start;
                    // $product->save(); 
                    
                    $i=0;
                    //Asignamos las fechas posibles, depende de los dias para
                    //cada TypeProductos
                    while ($i < $tp->deadlines) {
                        //Si es sabado y domingo no guardamos ese day
                        if (($date_addsum->dayOfWeekIso != 6) && ($date_addsum->dayOfWeekIso !=7)){
                            //Preguntamos dias libres de pais
                            if (!in_array($date_addsum->format('Y-m-d'), $daysFree)){
                                //Incrementa i     
                                $i++;
                                //Formatemos la fecha final
                                $date_end = $date_addsum->format('Y-m-d 23:59:00');
                            }
                            
                        }
                        //Incrementamos el un day
                        $date_addsum = $date_start->addDay(1);
                    }
                    
                    $products = new Products;
                    $products->services_id = $request->input('services_id');
                    $products->type_product_id = $tp->id;
                    // $products->type_product_id = $request->input('type_product_id');
                    $products->description_products = $tp->name;
                    $products->date_start_preview = isset($date_add) ? $date_add :null;
                    $products->date_end_preview = isset($date_end) ? $date_end :null;
                    $products->date_start_real= isset($date_add) ? $date_add :null;
                    $products-> date_end_real = isset($date_end) ? $date_end :null;
                    $products->save();
                    // $products = Products::firstOrCreate([
                    //     'services_id' => $request->input('services_id'),
                    //      'type_product_id' => $request->input('type_product_id')
                    // ]);
                    // $products = Products::create([
                    //     'services_id' => $request->input('services_id'),
                    //     'type_product_id' => $request->input('type_product_id'),
                    //     // 'description_products' => $tp->name,
                    //     // 'date_start' => isset($date_add) ? $date_add :null,
                    //     // 'date_end' => isset($date_end) ? $date_end :null
                    //     ] );
                    //dd('date_add',$products);
                    $date_start = $date_addsum;
                    $result_product[] = $products;
                    
                }
                //dd('$product',$product);
                // field: 'lexido', 
                // field: 'name', 
                // field: 'date_start', 
                // field: 'date_end', 
                Mail::to(User::find(1)->email)->later(5,
                    new SentProduct([], "{$this->description}",
                        "El proceso {$this->description} se bloquea: {$e->getMessage()} . ':: Linea' . {$e->getLine()}"));
                
                    return json_encode($result_product);

            }    
        } catch (Exception $e) {
            // Mail::to(User::find(1)->email)->later(5,
            //     new SentDataInfo([], "{$this->description}",
            //         "El proceso {$this->description} se bloquea: {$e->getMessage()} . ':: Linea' . {$e->getLine()}"));
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
     * @param  \App\Products  $products
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createProducts(Request $request)
    {
        try {
            $daysFree = array();
            $result_product = array();
            $areafindid = $request->areas_id;
            // services_id, area_id, category_id, selected_date_start, type_product_id, 
            // lexido, description_product,date_start,status
            // dispatch(addProduct(props.servi_id, props.areas_id, props.category_id, 
            // selectedDateStart, tipoproduct, lexico, description_product, 
            // format(toDate(selectedDateStart), 'yyyy/MM/dd'), status));  
            $date_start = Carbon::now();

            if (isset($areafindid) && !empty($areafindid)){
                
                $type_product = TypeProducts::where('areas_id','=',$areafindid)
                    ->get();

                $days_holidays = Holiday::all();
                //Creamos un array de los dias libres
                foreach($days_holidays as $key=>$values){
                    $daysFree[] = $values['date'];
                }
                
                foreach ($type_product as $tp) {    
                   
                    if (isset($tp->deadlines)){
                        //dd($tp->deadlines);
                    }
                    // $product = new Products();
                    // $product =  Products::updateOrCreate();
                    // $product->services_id = $request->input('services_id');
                    // $product->type_product_id = $request->input('type_product_id');
                    
                    // $product->description_product = $tp->name;
                    //Si es sabado o Domingo increment
                    while (($date_start->dayOfWeekIso == 6) || ($date_start->dayOfWeekIso == 7)){
                        $date_start->addDay(1);
                    }
                    // dump('description_product', $tp->name);
                    // dump('date_start',$date_start);
                    //Formatemos el primer day en 00:00:00
                    $date_add =$date_start->format('Y-m-d 00:00:00');
                    

                    // $product->date_start = $date_add;
                    
                    $date_addsum = $date_start;
                    // $product->save(); 
                    
                    $i=0;
                    //Asignamos las fechas posibles, depende de los dias para
                    //cada TypeProductos
                    while ($i < $tp->deadlines) {
                        //Si es sabado y domingo no guardamos ese day
                        if (($date_addsum->dayOfWeekIso != 6) && ($date_addsum->dayOfWeekIso !=7)){
                            //Preguntamos dias libres de pais
                            if (!in_array($date_addsum->format('Y-m-d'), $daysFree)){
                                //Incrementa i     
                                $i++;
                                //Formatemos la fecha final
                                $date_end = $date_addsum->format('Y-m-d 23:59:00');
                            }
                            
                        }
                        //Incrementamos el un day
                        $date_addsum = $date_start->addDay(1);
                    }
                    
                    $products = new Products;
                    $products->services_id = $request->input('services_id');
                    $products->type_product_id = $tp->id;
                    // $products->type_product_id = $request->input('type_product_id');
                    $products->description_products = $tp->name;

                    $products->date_start_preview = isset($date_add) ? $date_add :null;
                    $products-> date_end_preview = isset($date_end) ? $date_end :null;
                    $products->date_start_real = isset($date_add) ? $date_add :null;
                    $products-> date_end_real = isset($date_end) ? $date_end :null;

                    $products->save();
                    // $products = Products::firstOrCreate([
                    //     'services_id' => $request->input('services_id'),
                    //      'type_product_id' => $request->input('type_product_id')
                    // ]);
                    // $products = Products::create([
                    //     'services_id' => $request->input('services_id'),
                    //     'type_product_id' => $request->input('type_product_id'),
                    //     // 'description_products' => $tp->name,
                    //     // 'date_start' => isset($date_add) ? $date_add :null,
                    //     // 'date_end' => isset($date_end) ? $date_end :null
                    //     ] );
                    //dd('date_add',$products);
                    $date_start = $date_addsum;
                    $result_product[] = $products;
                    
                }
                //dd('$product',$product);
            // field: 'lexido', 
            // field: 'name', 
            // field: 'date_start', 
            // field: 'date_end', 
                return json_encode($result_product);
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
