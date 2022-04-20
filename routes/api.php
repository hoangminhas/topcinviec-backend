<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login',[AuthController::class,'login']);
Route::post('register',[AuthController::class, 'register']);




Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{id}/recruiter',[PostController::class,'getAllPostOfRecruiter']);
Route::get('posts/{id}/detail',[PostController::class,'detail']);
Route::post('/posts',[PostController::class,'store']);




Route::get('/candidates', [CandidateController::class, 'index']);
Route::post('/candidates', [CandidateController::class, 'store']);
Route::get('/recruiters', [RecruiterController::class, 'index']);
Route::get('/search',[SearchController::class,'searchJob']);
