<?php

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

Route::middleware('auth:sanctum')->group(function () {
    // Get all skills
    Route::get('/skills', 'SkillController@index');

    // Get user's skills
    Route::get('/user/{user}/skills', 'UserController@getUserSkills');

    // Assign skills to a user
    Route::post('/user/{user}/skills', 'UserController@assignSkillsToUser');

});
