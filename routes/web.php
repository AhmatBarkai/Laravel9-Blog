<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminCategoryController;




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
//Admin Group

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/',[\App\Http\Controllers\HomeController::class,'index'] )->name('admin_home');
    Route::get( 'category' ,[\App\Http\Controllers\AdminCategoryController::class,'index'])->name('admin_category');
    Route::post('category/create',[\App\Http\Controllers\AdminCategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/add' ,[\App\Http\Controllers\AdminCategoryController::class,'add'])->name('admin_category_add');
    Route::get('category/delete/{id}',[\App\Http\Controllers\AdminCategoryController::class,'destroy'])->name('admin_category_delete');
    // Route::get(   ,[\App\Http\Controllers\AdminCategoryController::class,''])->name('');
    // Route::get(   ,[\App\Http\Controllers\AdminCategoryController::class,''])->name('');

}



);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//admin
Route::get('/admin',[AdminHomeController::class,'index'])->name('adminhome');

//admin login
Route::get('/admin/login', [AdminHomeController::class,'login'])->name('adminlogin');

//login check
Route::post('/admin/logincheck', [AdminHomeController::class,'logincheck'])->name('admin_logincheck');

Route::get('/admin/logout', [AdminHomeController::class,'logout'])->name('admin_logout');

Route:: middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');




// Route::get('/admin', [/App/Http/Controller/Admin/HomeController::class,'index'])->name('anasayfa');





