<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreatePart4Controller;

use App\Http\Controllers\ReportController;
use App\Http\Controllers\GraphController;

use App\Http\Controllers\insertController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\Kr;
use App\Http\Controllers\ObjectGroup1;
use App\Http\Controllers\UserOKR;
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

Route::get('/submit', [insertController::class, 'index']);



// Route::post('/login', [LoginController::class, 'index'])->name('login');

Route::post('/Valid', [LoginController::class, 'index'], function ($argv) {
})->name('test');

Route::get('/insertDB', [CreatePart4Controller::class, 'index'], function () {
});


Route::resource('createpart4', CreatePart4Controller::class);
// Route::get('/createpart4', [CreatePart4Controller::class, 'index']);

Route::get('/report', [ReportController::class, 'index']);

Route::get('/graph', [GraphController::class, 'index']);



Route::post('/index', function () {
    return view('index');
})->name('/');

// Route::get('file-upload', [FileUploadController::class, 'index']);
// Route::post('store', [FileUploadController::class, 'store']);
Route::get('file-upload', [FileUploadController::class, 'index'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'store'])->name('file.upload.post');
Route::get('file/download', [FileUploadController::class, 'getfile']);

// Group 1
Route::get('/section_one', [ObjectGroup1::class, 'index']);
Route::get('/section_one/{id}', [Kr::class, 'index']);
Route::post('/section_one/addKR', [Kr::class, 'addKR'])->name('addKR');
Route::post('/section_one/add', [ObjectGroup1::class, 'addObject'])->name('addobject');
Route::post('/section_one/updateKR', [Kr::class, 'updateKR'])->name('updateKR');
Route::post('/section_one/delete', [ObjectGroup1::class, 'deleteObject'])->name('deleteobject');
Route::post('/section_one/edit', [ObjectGroup1::class, 'editObject'])->name('editobject');
// ยกเลิกสิทธิ
Route::get('/cancelautrority/{id}/{employee}', [Kr::class, 'cancelautrority']);
// กำหนดสิทธิ
Route::get('/giveautrority/{id}/{employee}', [Kr::class, 'giveautrority']);
Route::post('/section_one/deletekr', [Kr::class, 'deletekr'])->name('deletekr');
Route::get('/userObject/{id}', [UserOKR::class, 'index']);
Route::get('/userKr/{id}/{mount}', [UserOKR::class, 'userKR']);
Route::post('/userKr/updateKr', [UserOKR::class, 'updateKRdetail'])->name('updateKRdetail');
Route::post('/userKr', [UserOKR::class, 'userKRdetail'])->name('userKRdetail');
// end Group1