<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('login',[AuthController::class,'showFormLogin'])->name('showFormLogin');
Route::post('login', [AuthController::class,'login'])->name('login');

Route::post('/register', function () {
    return view('registration');
});

Route::prefix('posts')->group(function (){
    Route::get('/',[PostController::class,'index'])->name('posts.index');
});

