<?php

use App\zhanri;
use App\Libri;
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

    $libri = Libri::find(1)->Zhanret;
    $zhanri = zhanri::find(1)->Librat;
    foreach ($libri as $liber) {
        echo $liber;
    }
    return dd($zhanri);
  
    // return $libri;
});
