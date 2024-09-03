<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect("/iot_devices");
});

Route::get('/iot_devices', 'App\Http\Controllers\IotDevicesController@index');
Route::post('/form_post', 'App\Http\Controllers\IotDevicesController@store');
// Route::post('/form_post', function () {
//     return ("test") ; 
// });

