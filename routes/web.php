<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ObjectGroup1;
use App\Http\Controllers\Kr;
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
    return view('index');
});

// Route::post('/login', [LoginController::class, 'index'])->name('login');


Route::post('/show', [LoginController::class,'index'],function ($log){

} )->name('show');



Route::get('/login1', function () {
    return view('manage.login');
});

Route::get('/login2', function () {
    return view('promote.login');
});

// Route::get('/section_one', function () {
//     return view('section_one.content');
// });
// Route::get('/section_one/{objective_name}', function ($objective_name) {
//     return view('section_one.objective',['objective_name'=>$objective_name]);
// });

Route::get('/section_one', [ObjectGroup1::class,'index']);
Route::get('/section_one/{id}', [Kr::class,'index']);
