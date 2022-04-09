<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
 
// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Z a-z]+']);

// Route::get('/test/' ,[HomeController::class,'test'])->name('test');
// Route::get('/hello', function () {
//     return 'welcome Ahmadim benim...is okey?';
// });
// Route::get('/greeting', function () {
//     return 'Hello World';
// });


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
Route::get('/', [HomeController::class,'home.index']);

Route::get('/', function () { return view('home.index'); });



// Route::get('/', function () {
//     return view('index');

// });
// Route::redirect('/anasayfa', '/home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
