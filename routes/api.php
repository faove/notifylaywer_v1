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

Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
    // Route::get('/api/services', [ServicesController::class, 'index']);
    Route::get('api/gets/{userid}', [UserController::class, 'index']);
    Route::get('api/clients/{clientid}', [ClientController::class, 'index']);
    Route::get('api/services/{serviceid}', [ServicesController::class, 'index']);
    Route::get('services/associate/{serviceid}', [ServicesController::class, 'getServiceAssoc']);
    Route::get('api/associates/{associateid}',[AssociatesController::class, 'index']);
    Route::get('api/areas/{areaid}',[AreasController::class, 'index']);
    Route::get('api/areas/categories/{areaid}',[AreasController::class, 'getCategArea']);
    Route::get('api/categories/{categoryid}',[CategoriesController::class, 'index']);
    Route::get('api/products/{productid}',[ProductsController::class, 'index']);
    Route::get('api/typestatus',[TypeStatusController::class, 'index']);
    Route::get('api/typeproducts/areas/{areasid}',[TypeProductsController::class, 'getTypeProducts']);

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
