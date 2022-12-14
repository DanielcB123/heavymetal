<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientAPI;
use App\Http\Controllers\AuthController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/client/client-search', [ClientAPI::class, 'showClient']);
// Route::get('/client/client-search', [ClientAPI::class, 'showClient'])->middleware('auth:sanctum');
// Route::post('/client/login',[AuthController::class, 'login']);
Route::delete('/client/logout',[AuthController::class, 'logout']);
// Route::post('/client/register',[AuthController::class, 'register']);
// Route::get('/get-user',[AuthController::class, 'getUser']);



Route::controller(AuthController::class)->group(function(){
    Route::post('/client/login','login');
    Route::post('/client/register','register');
    Route::get('/get-user','getUser');
});


// // Route::get('/company/company-search', [ClientAPI::class, 'showClient']);
// // Route::get('/company/company-search', [ClientAPI::class, 'showClient'])->middleware('auth:sanctum');
// // Route::post('/company/login',[AuthController::class, 'login']);
// Route::delete('/company/logout',[CompanyController::class, 'logout']);
// // Route::post('/company/register',[AuthController::class, 'register']);


// Route::controller(CompanyController::class)->group(function(){
//     Route::post('/company/login','login');
//     Route::post('/company/register','register');
// });