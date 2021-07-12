<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\TypeStatusController;
use App\Http\Controllers\TypeProductsController;
use App\Http\Controllers\AssociatesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', 'UserController@AuthRouteAPI');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['cors','api']], function () {
    //Rutas a las que se permitirá acceso
    // Route::get('/api/services', [ServicesController::class, 'index']);
    Route::get('gets/{userid}', [UserController::class, 'index']);
    Route::get('clients/{clientid}', [ClientController::class, 'index']);
    Route::get('services/{serviceid}', [ServicesController::class, 'index']);
    Route::get('services/associate/{serviceid}', [ServicesController::class, 'getServiceAssoc']);
    Route::get('associates/{associateid}',[AssociatesController::class, 'index']);
    Route::get('areas/{areaid}',[AreasController::class, 'index']);
    Route::get('areas/categories/{areaid}',[AreasController::class, 'getCategArea']);
    Route::get('categories/{categoryid}',[CategoriesController::class, 'index']);
    Route::get('products/{productid}',[ProductsController::class, 'index']);
    Route::get('typestatus',[TypeStatusController::class, 'index']);
    Route::get('typeproducts/areas/{areasid}',[TypeProductsController::class, 'getTypeProducts']);


    Route::post('products/{areas_id}', [ProductsController::class, 'createProducts']);

    // Route::get('api/category',[CategoriesController::class, 'index']);
});




// Route::group(['prefix' => 'services'], function () {
//     Route::get('/', [ServicesController::class, 'index']);
//     Route::get('/{serviceid}', [ServicesController::class, 'index']);
//     Route::get('getservice/{serviceid}', 'ServicesController@getService');
// });


Route::resource('users','UserController');
Route::resource('services','ServicesController');
Route::resource('typeproducts','TypeProductsController');
Route::resource('categories','CategoriesController');
Route::resource('clients','ClientController');
Route::resource('associates','AssociatesController');
Route::resource('areas','AreasController');
Route::resource('products','ProductsController');
Route::resource('typestatus','TypeStatusController');
