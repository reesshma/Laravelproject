<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\ProductController;




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

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/reeshu', function () {
    return 'Hello prabha';
});

Route::get('/user', [SampleController::class, 'sam']);

Route::get('/web', function () {
    return view('greeting', ['name' => 'James']);
});
Route::get('/user', [SampleController::class, 'sam']);
Route::get('index1', [SampleController::class, 'myfunction'])-> name('student_details1');
Route::post('index1', [SampleController::class, 'insertData']);
Route::post('index1', [SampleController::class, 'insertvalues'])-> name('student_details2'); 
Route::post('/store', [SampleController::class, 'myfunction1'])-> name('student_details'); 
Route::get('/nestedview', [SampleController::class, 'myfun']);
Route::get('/nested', [SampleController::class, 'namimg']);
Route::get('/nest', [SampleController::class, 'nam']);
Route::get('/nes', [SampleController::class, 'nam1']);
Route::get('/nest1', [SampleController::class, 'nam2']);
Route::get('/super', [SampleController::class, 'list'])->name('list');

Route::get('deploy', [ProductController::class, 'show'])->name('first');
Route::post('deploy', [ProductController::class, 'create'])-> name('first1'); 
Route::get('supress', [ProductController::class, 'index'])-> name('first3');

