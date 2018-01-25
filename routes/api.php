<?php

use Illuminate\Http\Request;
use App\TableMySkills;
use App\User;
use App\TableMyAchievements;
use App\TableTraining;

;

// use App\TableMyTraining;
// use App\TableMyAcheminements;
// use App\TableContactForm;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/myskills' , function(){
//     header('Acces-Control-Allow-Origin: *');
//     header('Acces-Control-Allow-Methods: Get');
//     return TableMySkills::get();
// });


Route::middleware('auth:api')->get('/myskills', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return TableMySkills::get();
});

Route::middleware('auth:api')->get('/users', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return User::get();
});

Route::middleware('auth:api')->get('/myacheminements', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return TableMyAchievements::get();
});

Route::middleware('auth:api')->get('/mytraining', function () {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET');
        return TableMyTraining::get();
});
