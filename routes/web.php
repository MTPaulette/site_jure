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
//     Alert::success('Congrats', 'You\'ve Successfully BD Business');   
//     return view('welcome');
// });

Route::get('/', function () {
    Alert::success('Congrats', 'You\'ve Successfully BD Business');   
    return view('livewire.accueil');
});