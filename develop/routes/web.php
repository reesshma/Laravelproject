<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProdutcController;




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

Route::get('products/index', [ProductController::class, 'index'])->name('detail');
Route::post('products/store', [ProductController::class, 'store'])-> name('details');
Route::get('products/create', [ProductController::class, 'create'])-> name('edit'); 
Route::get('products/edit/{id}', [ProductController::class, 'edit'])-> name('edit'); 
Route::put('products/update/{id}', [ProductController::class, 'update'])-> name('update'); 
Route::delete('products/destroy/{id}', [ProductController::class, 'destroy'])-> name('destroy'); 


Route::group(['prefix' => 'employees', 'as' => 'employees.', 'middleware' => ['auth','admin']],
function (){
    Route::get('index', [EmployeeController::class, 'index'])->name('index'); 
    Route::get('create', [EmployeeController::class, 'create'])->name('create');  
    Route::post('store', [EmployeeController::class, 'store'])->name('store'); 
    Route::get('edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [EmployeeController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [EmployeeController::class, 'destroy'])->name('destroy');              
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('file', [ProductController::class, 'file'])->name('file');
Route::post('stores', [ProductController::class, 'stores'])->name('stores');
Route::get('assest', [ProductController::class, 'assest'])->name('assest');


Route::resource('produtcs', ProductController::class);

Route::get('assest', [ProductController::class, 'assest'])->name('assest');

Route::get('product/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
Route::get('product/admins', [ProductController::class, 'admin'])->name('admin');
Route::get('product/managers', [ProductController::class, 'manager'])->name('manager');
Route::get('product/users', [ProductController::class, 'user'])->name('userdashboard');

Route::get('reeshu', [ProductController::class, 'reeshu'])->name('reeshu');


