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

Route::get('hoangbach/', function () {
   dd ('XIN CHÀO HOÀNG BÁCH');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $name = "Hoàng Xuân Bách";
    $phone = "0474747474";
    $data = ['homenumber'=>75, 'address'=>'Thua Thien Hue'];
    return view('homepage.home', compact('name','phone','data'));
});

Route::get('/', 'UserController@showUsers');