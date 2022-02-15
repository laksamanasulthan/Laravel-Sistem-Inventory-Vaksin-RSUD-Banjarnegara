<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApidbduaController;


use App\Http\Controllers\API\AuthController as AC;
use App\Http\Controllers\API\ApidbduaAuthController as AdaController;



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

Route::post('login', [AC::class, 'signin']);
Route::post('register', [AC::class, 'signup']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function () {
	Route::resource('apidbauth', AdaController::class);
});

Route::resource('apidbdua', AdaController::class);


Route::get('apidbdua', [ApidbduaController::class, 'index']);
Route::post('apidbdua', [ApidbduaController::class, 'create']);
Route::put('/apidbdua/{id}', [ApidbduaController::class, 'update']);
Route::delete('apidbdua/{id}', [ApidbduaController::class, 'destroy']);