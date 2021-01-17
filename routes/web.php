<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () { 
    return view('layout');
});

Route::post('/api/posts', 'UserController@upload');
Route::get('/api/gets', [UserController::class, 'index']);
// Route::post('/posts', [UserController::class, 'index']);
