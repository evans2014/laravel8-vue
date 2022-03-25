<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SclassController;
use App\Http\Controllers\API\SubjectController;
use App\Http\Controllers\API\SectionsController;
use App\Http\Controllers\API\StudensController;
use App\Http\Controllers\JWTController;
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
Route::group([
    //'middleware' => 'api'
    'prefix' => 'auth'
], function($router) {
    Route::post('/register', [JWTController::class, 'register']);
    Route::post('/login', [JWTController::class, 'login']);
    Route::post('/logout', [JWTController::class, 'logout']);
    Route::post('/refresh', [JWTController::class, 'refresh']);
    Route::post('/profile', [JWTController::class, 'profile']);
});
/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::resource('/class', SclassController::class);
Route::resource('/subject', SubjectController::class);
Route::resource('/section', SectionsController::class);
Route::resource('/student', StudensController::class);
