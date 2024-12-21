<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\User1Controller;
use App\Models\Package;
use App\Models\User1;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [User1Controller::class,'home']);

Route::get('/admin',function() {
    return view('adminhome');
});

Route::get('/contact', function () {
    return view('contact');

});



 Route::get('/about', function () {
     return view('about');

 });

Route::resource('category', CategoryController::class);
Route::resource("/package",PackageController::class);
Route::get('/registration',[User1Controller::class,'index']);
Route::get('/login',[User1Controller::class,'index1']);
Route::post('/register_user',[User1Controller::class,'registration']);
Route::get('/about',[User1Controller::class,'index2']);
Route::get('/contact',[User1Controller::class,'index3']);
Route::get('/alluser',[User1Controller::class,'getAlluser']);
Route::get('/more/{id}',[User1Controller::class,'more']);
Route::post('/login_user',[User1Controller::class,'login']);
Route::get('/explore',[User1Controller::class,'explore']);
Route::post('/search',[User1Controller::class,'search']);