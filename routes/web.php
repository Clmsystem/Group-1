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
    return view('login');
});

// Route::post('/login', [LoginController::class, 'index'])->name('login');


// Route::post('/Valid', [LoginController::class,'index'],function ($argv){

// } )->name('valid');


Route::post('/index', function () {
    return view('index');
})->name('/');

Route::get('/section_one', [ObjectGroup1::class,'index']);
Route::get('/section_one/{id}', [Kr::class,'index']);
Route::post('/section_one/addKR', [Kr::class,'addKR'])->name('addKR');
Route::post('/section_one/add', [ObjectGroup1::class,'addObject'])->name('addobject');
Route::post('/section_one/updateKR', [Kr::class,'updateKR'])->name('updateKR');
// ยกเลิกสิทธิ
Route::get('/cancelautrority/{id}/{employee}', [Kr::class,'cancelautrority']);
// กำหนดสิทธิ
Route::get('/giveautrority/{id}/{employee}', [Kr::class,'giveautrority']);