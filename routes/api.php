<?php

use App\Http\Controllers\Api\v1\CustomerController as V1CustomerController;
use App\Http\Controllers\Api\v2\CustomerController as V2CustomerController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/test',[CustomerController::class,'test']);

/**Version 1 */
Route::prefix('v1')->group(function () {
    // chỉ những method nào khai báo trong only() thì mới chạy
Route::resource('customer', V1CustomerController::class)->only(['index','show','store','update','destroy']);
});

/**Version 2 */
Route::prefix('v2')->group(function () {
    Route::resource('customer', V2CustomerController::class);
});
