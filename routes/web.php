<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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

/*Route::get('/', function () {
    return view('index');
});*/


Route::get('/', function () {
    return view('landingComponents.ilbLanding');
});
Route::get('/dashboard', function () {
    return view('adminComponents.dashboard');
});
Route::get('/detailsAcademy', function () {
    return view('detailsAcademy.detailsAcademy');
});
Route::view('/import', 'loadFileComponents.formulario')->name('formulario');


Route::view('/login', 'landingComponents.login');
//Route::view('/dashboard', 'adminComponents.dashboard');
Route::post('/dashboard', 'userLoginController@login');
//import 
Route::get('/import','loadFileController@importFile');
Route::post('/import','loadFileController@importExcel');
Route::view('/legals', 'legalsComponents.terminosPoliticas');