<?php

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
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard','UserController@index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard','UserController@index');
// });

// Route::get('/',function () {
//     return view('dashboard');
// });

// Route::get('/', function () { 
//     return view('layout');
// });

Route::post('api/users', [UserController::class, 'store']);
Route::get('/api/gets', [UserController::class, 'index']);
Route::get('api/gets/{userid}', [UserController::class, 'index']);
Route::get('api/gets', [UserController::class, 'index']);
Route::get('services/associate/{serviceid}', [ServicesController::class, 'getServiceAssoc']);
Route::get('api/services/{serviceid}', [ServicesController::class, 'index']);
//Route::get('api/clients/{clientid}', 'App\Http\Controllers\ClientController@index')->name('index');
//Route::get('api/clients/{clientid}', [ClientController::class, 'index']);
Route::get('api/categories/{categoryid}',[CategoriesController::class, 'index']);
Route::get('api/areas/{areaid}',[AreasController::class, 'index']);
Route::get('api/areas/categories/{areaid}',[AreasController::class, 'getCategArea']);
Route::get('api/associates/{associateid}',[AssociatesController::class, 'index']);
Route::get('api/products/{productid}',[ProductsController::class, 'index']);
Route::get('api/typestatus',[TypeStatusController::class, 'index']);
Route::get('api/typeproducts/areas/{areasid}',[TypeProductsController::class, 'getTypeProducts']);

