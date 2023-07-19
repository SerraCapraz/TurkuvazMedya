<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginCntrl;
use App\Http\Controllers\registerCntrl;
use App\Http\Controllers\ListCntrl;
use App\Http\Controllers\CategoryCntrl;
use App\Http\Controllers\ProductCntrl;


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
Route::post("/edit/{username}", [listCntrl::class, "editPassword"])->name("editPassword");
Route::get("/delete/{username}", [ListCntrl::class, "delete"])->name("delete");
Route::post("/delete/{username}", [listCntrl::class, "deleteFunction"])->name("deleteFunction");
Route::get("/listofAll", [ListCntrl::class, "liste"]);
Route::post("/deleteAllSelected",[ListCntrl::class,"deleteAll"])->name("deleteAllSelected");


//category
Route::get("/category", function(){return view("category"); })->name("category");
Route::post("/category", function(){return view("category"); })->name("categoryPost");
Route::get("/addCategory", [CategoryCntrl::class, "display"])->name("addCategory");
Route::post("/addCategory", [CategoryCntrl::class, "add"])->name("categoryAdd");
Route::post("/categoryList", [CategoryCntrl::class, "displayList"])->name("categoryList");
Route::get("/categoryList", [CategoryCntrl::class, "categoryListe"]);
Route::get("/editCategory/{categorytitle}", [CategoryCntrl::class, "fillEditCategory"])->name("fillEditCategory");
Route::post("/editCategory/{categorytitle}", [CategoryCntrl::class, "editCategory"])->name("editCategory");
Route::get("/deleteCategory/{categorytitle}", [CategoryCntrl::class, "fillDeleteCategory"])->name("fillDeleteCategory");
Route::post("/deleteCategory/{categorytitle}}", [CategoryCntrl::class, "deleteCategory"])->name("deleteCategory");

//product
Route::get("/product", function(){return view("product"); })->name("product");
Route::get("/addProduct", [ProductCntrl::class, "display"])->name("addProduct");
Route::post("/addProduct", [ProductCntrl::class, "add"])->name("productAdd");
Route::get("/productList", [ProductCntrl::class, "productListe"])->name("productList");
Route::get("/editProduct/{producttitle}", [ProductCntrl::class, "fillEditProduct"])->name("fillEditProduct");
Route::post("/editProduct/{producttitle}", [ProductCntrl::class, "editProduct"])->name("editProduct");
Route::get("/deleteProduct/{producttitle}", [ProductCntrl::class, "fillDeleteProduct"])->name("fillDeleteProduct");
Route::post("/deleteProduct/{producttitle}}", [ProductCntrl::class, "deleteProduct"])->name("deleteProduct");
