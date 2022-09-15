<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaskController;
 use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnnouncementController;


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

// Route::get('/loginManager', function () {
//     return view('managers.logins');
// });


// Route::get('employee/all',[EmployeeController::class,'showAll'])->name('employee.all');  
// Route::post('employee/create',[EmployeeController::class,'store'])->name('employees.save');
// Route::get('employee/create',[EmployeeController::class,'create'])->name('employees.save');
Route::get('/', [AuthController::class, 'landing'])->name('welcome'); //homepage
// Route::get('dashboardAdmin', [AuthController::class, 'dashboard_admin'])->name('dashboardAdmin');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');


// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::get('/login', [AuthController::class, 'login_admin'])->middleware('alreadyLoggedIn');
// Route::get('/loginManager', [AuthController::class, 'login_manager'])->middleware('alreadyLoggedIn');

Route::get('loginEmployee', [AuthController::class, 'loginEmployee'])->name('loginEmployee');
// Route::post('postlogin', [AuthController::class, 'login'])->name('login');

// guide para sa custom auth login nako sauna

// Route::get('login', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('registration', [AuthController::class, 'registration']);
Route::post('/register-admin',[AuthController::class,'registerUser'])->name('register-admin');

Route::post('login-manager',[AuthController::class,'loginWeb'])->name('login-manager');
Route::post('login-admin',[AuthController::class,'loginWeb'])->name('login-admin');
// Route::get('/home',[CustomAuthController::class,'home'])->middleware('isLoggedIn');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
// Route::get('/adminlogin',[CustomAuthController::class,'logout']);

Route::resource("employee", EmployeeController::class);
Route::resource("manager", ManagerController::class);
Route::resource("task", TaskController::class);
Route::resource("announcement", AnnouncementController::class);