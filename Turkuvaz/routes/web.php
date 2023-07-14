<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginCntrl;
use App\Http\Controllers\registerCntrl;
use App\Http\Controllers\ListCntrl;


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

Route::get("/", [loginCntrl::class, "display2"])->name("logReg");
Route::post("/homepage", [loginCntrl::class, "loginUser"])->name("homepage");
Route::get("/register", [registerCntrl::class, "display"])->name("register");
Route::post("/user", [registerCntrl::class, "add"])->name("user");
Route::get("/user", function(){return view("user"); })->name("user");
Route::post("/list", [ListCntrl::class, "display3"])->name("list");
Route::get("/list", [ListCntrl::class, "liste"]);
Route::get("/edit/{username}", [listCntrl::class, "edit"])->name("edit");
Route::get("/delete/{user}", [ListCntrl::class, "displayDelete"])->name("delete");







//Route::get("/login-user", [loginCntrl::class, "loginUser"])->name("login-user");
