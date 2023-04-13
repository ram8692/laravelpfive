<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
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


/****************************admin start */

Route::prefix('admin')->group(function(){
    Route::get('/login',[AdminController::class,'index'])->name('login_from');
    Route::post('/login/owner',[AdminController::class,'login'])->name('admin.login');
    
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('/register',[AdminController::class,'AdminRegister'])->name('register_from');

    Route::post('/register/create',[AdminController::class,'AdminRegisterCreate'])->name('admin.register.create');
});

/****************************admin end */

/****************************seller start */

Route::prefix('seller')->group(function(){
    Route::get('/login',[SellerController::class,'index'])->name('seller_login_from');
    Route::post('/login/owner',[SellerController::class,'login'])->name('seller.login');
    
    Route::get('/dashboard',[SellerController::class,'dashboard'])->name('seller.dashboard')->middleware('seller');
    Route::get('/logout',[SellerController::class,'SellerLogout'])->name('seller.logout');
    Route::get('/register',[SellerController::class,'SellerRegister'])->name('seller_register_from');

    Route::post('/register/create',[SellerController::class,'SellerRegisterCreate'])->name('seller.register.create');
});

/****************************seller end */




 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
