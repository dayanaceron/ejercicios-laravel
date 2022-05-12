<?php

use App\Http\Controllers\practica1Controlle;
use App\Http\Controllers\practica2Controller;
use App\Http\Controllers\practica3Controller;
use App\Http\Controllers\practica4Controller;
use App\Http\Controllers\practica0Controller;
use App\Http\Controllers\practica5Controller;
use App\Http\Controllers\practica6Controller;
use App\Http\Controllers\practica7Controller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practica1',[practica1Controlle::class, 'verformulariopractica1'])->name('ejercicio1');
route::post('resultado_pr1',[practica1Controlle::class, 'resultado_practica1'])->name('resultado_pr1');

Route::get('/practica2', [practica2Controller::class, 'practica2'])->name('practica2');
/* Route::get('/practica2',[practica2Controller::class,'practica2'])->name('practica2'); */
Route::post('resultado_pr2',[practica2Controller::class,'resultado_pr2'])->name('resultado_pr2');

Route::get('/practica3', [practica3Controller::class, 'practica3'])->name('practica3');
/* Route::get('/practica2',[practica2Controller::class,'practica2'])->name('practica2'); */
Route::post('resultado_pr3',[practica3Controller::class,'resultado_pr3'])->name('resultado_pr3');

Route::get('/practica4', [practica4Controller::class, 'practica4'])->name('practica4');
/* Route::get('/practica2',[practica2Controller::class,'practica2'])->name('practica2'); */
Route::post('resultado_pr4',[practica4Controller::class,'resultado_pr4'])->name('resultado_pr4');

Route::get('/practica0', [practica0Controller::class, 'verformulariopractica0'])->name('practica0');
/* Route::get('/practica2',[practica2Controller::class,'practica2'])->name('practica2'); */
Route::post('resultado_pr0',[practica0Controller::class,'resultado_practica0'])->name('resultado_pr0');

Route::get('/practica5', [practica5Controller::class, 'practica5'])->name('practica5');
/* Route::get('/practica2',[practica2Controller::class,'practica2'])->name('practica2'); */
Route::post('resultado_pr5',[practica5Controller::class,'resultado_pr5'])->name('resultado_pr5');

Route::get('/practica6', [practica6Controller::class, 'practica6'])->name('practica6');
/* Route::get('/practica2',[practica2Controller::class,'practica2'])->name('practica2'); */
Route::post('resultado_pr6',[practica6Controller::class,'resultado_pr6'])->name('resultado_pr6');

Route::get('/practica7', [practica7Controller::class, 'practica7'])->name('practica7');
/* Route::get('/practica2',[practica2Controller::class,'practica2'])->name('practica2'); */
Route::post('resultado_pr7',[practica7Controller::class,'resultado_pr7'])->name('resultado_pr7'); 



