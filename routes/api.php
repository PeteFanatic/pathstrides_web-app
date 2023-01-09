<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function(){
    
});
Route::post('/auth/updateEmployeePass',[AuthController::class,'updateEmployeePass']);// Route::post('/auth/login',[AuthController::class,'login']);
Route::post('/auth/loginEmployee',[AuthController::class,'loginEmployee']);
Route::post('/taskReport',[TaskReportController::class,'uploadImage']);
//Route::post('/auth/register',[AuthController::class,'register']);
Route::get('/employeeTask','App\Http\Controllers\TaskController@getEmployeeTask');
Route::get('/employeeUser','App\Http\Controllers\AdminController@getUser');
Route::get('/employeeAnnounce','App\Http\Controllers\AnnouncementController@getAnnouncement');
Route::get('/employeePointShop','App\Http\Controllers\RedeemShopController@getRedeemShop');
Route::get('/employeePointShop','App\Http\Controllers\RedeemShopController@getUserPoints');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
