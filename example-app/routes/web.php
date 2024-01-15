<?php

use App\Http\Controllers\Mycontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/mycontroller',[Mycontroller::class,'index'] );
//Route::get('/mycontroller2', 'App\Http\Controllers\Mycontroller');

Route::get('/my-route', function () {

    return view('my-route');
});
Route::get('/admin', function () {

    return view('Admin101');
});
/*
Route::post('/my-route',function(Request $req){
    $data['numberinput'] = $req->input('numberinput');
    return view('newroute',$data);

});
*/


Route::post('/mail',[Mycontroller::class,'store']);
