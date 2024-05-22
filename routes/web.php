<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routesv
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/homepage', function () {
    $data = [
    'name'=>'Paul',
    'lastname'=>'Brunei',
    'age'=>'24',
    'email'=>'neoxtrotoka@gmail.com',
    'phone'=>'32132141512',
    'city'=>'Torino',
    'country'=>'Italia',
    ];
    return view('home', $data);
});