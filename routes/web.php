<?php

use App\zhanri;
use App\Libri;
use App\Roli;
use App\User;
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

Route::get('/', function () {

    return view('welcome');
});
Route::get('/zhanri', function () {

    /*$libri = Libri::find(1)->Rafti;
    $zhanri = zhanri::find(1)->Librat;
    foreach ($libri as $liber) {
        echo $liber;
    }
    return dd($zhanri);*/
    $roli = Libri::findOrFail(1)->ShtepiaBotuese;
    echo $roli;
  
    // return $libri;
});
Route::resource('/Admin', 'UserController');
