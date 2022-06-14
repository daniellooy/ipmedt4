<?php

use Illuminate\Http\Request;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::view('/{path?}', 'app')->where('path', '.*');

Route::get('/bedrijven', [\App\Http\Controllers\BedrijfController::class, 'index']);

Route::post('/addTodo', [App\Http\Controllers\BedrijfController::class, 'storeTodo']);