<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('employee/all',[EmployeeController::class,'showAll'])->name('employee.all');  
// Route::post('employee/create',[EmployeeController::class,'store'])->name('employees.save');
// Route::get('employee/create',[EmployeeController::class,'create'])->name('employees.save');

// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::resource("/employee", EmployeeController::class);
Route::resource("/manager", ManagerController::class);
Route::resource("/task", TaskController::class);
// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('postlogin', [AuthController::class, 'login'])->name('postlogin');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');