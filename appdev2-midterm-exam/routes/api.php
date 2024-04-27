<?php

use App\Http\Controllers\ProductController;
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


// Route::middleware('extract.token')->group(function(){
//     Route::apiResource('products', ProductController::class);
// });

Route::apiResource('products', ProductController::class)->only([
    'index', 'show'
]);

Route::group(['middleware' => 'extract.token'], function () {
    Route::apiResource('products', ProductController::class)->except([
        'create', 'store', 'update', 'destroy'
    ]);
    Route::post('products/upload/local', [ProductController::class, 'uploadImageLocal'])->name('upload.local');
    Route::post('products/upload/public', [ProductController::class, 'uploadImagePublic'])->name('upload.public');
});
