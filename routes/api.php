<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumbersController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// WILL REFACTOR ROUTES TO RETRIEVE AND GENERATE
Route::get('/generate', [NumbersController::class, 'index']);
Route::get('/generate/all', [NumbersController::class, 'all']);

Route::get('/retrieve/{id}', [NumbersController::class, 'retrieve']);