<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
    // Route::get('/api/services', [ServicesController::class, 'index']);
    Route::get('api/gets/{userid}', [UserController::class, 'index']);
    Route::get('api/clients/{clientid}', [ClientController::class, 'index']);
    Route::get('services/{serviceid}', [ServicesController::class, 'index']);
    Route::get('services/{serviceid}', [ServicesController::class, 'getservice']);
    Route::get('api/associates/{associateid}',[AssociatesController::class, 'index']);
    Route::get('api/category/{categoryid}',[categoryController::class, 'index']);
});


// Route::group(['prefix' => 'services'], function () {
//     Route::get('/', [ServicesController::class, 'index']);
//     Route::get('/{serviceid}', [ServicesController::class, 'index']);
//     Route::get('getservice/{serviceid}', 'ServicesController@getService');
// });


Route::resource('users','UserController');
Route::resource('services','ServicesController');
Route::resource('matters','MattersController');
Route::resource('category','CategoryController');
Route::resource('clients','ClientController');
Route::resource('associates','AssociatesController');

