<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psy\Readline\Hoa\Protocol;

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
// Route::get('/photos',[PhotoController::class,'index']);
// Route::post('/photos',[PhotoController::class,'store']);

Route::resource('/photos',PhotoController::class);
Route::get('/photos/search/{keyword}',[PhotoController::class,'search']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
