<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employee',[EmployeeController::class,'index']);
Route::post('/employee',[EmployeeController::class,'create']);
Route::get('/display',[EmployeeController::class,'display']);
Route::get('/update/{id}',[EmployeeController::class,'update']);
Route::post('/update',[EmployeeController::class,'updateData']);
Route::get('/delete/{id}',[EmployeeController::class,'delete']);
Route::view('login','login');
Route::post("user",[LoginController::class,'userLogin']);
Route::view('profile','profile');
Route::get('/logout', function () {
    if(session()->has('cus_name')){
        session()->pull('cus_name',null);
    }
    return redirect('login');
});


