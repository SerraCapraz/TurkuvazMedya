<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginCntrl;
use App\Http\Controllers\RegisterCntrl;
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

Route::get("/", [LoginCntrl::class, "display"])->name("logReg");
Route::get("/logout", [LoginCntrl::class, "logout"])->name("logout");

Route::post("/homepage", [LoginCntrl::class, "loginUser"])->name("homepage");
Route::middleware("auth")->get("/homepage", function(){return view("homepage"); }) ;
Route::group(["middleware"=>"auth"],function () {

    Route::get("/register", [RegisterCntrl::class, "display"])->name("register");
    Route::post("/user", [RegisterCntrl::class, "add"])->name("postUser");
    Route::get("/user", function(){return view("User.user"); })->name("user");
    Route::post("/list", [ListCntrl::class, "display"])->name("list");
    Route::get("/list", [ListCntrl::class, "liste"]);
    Route::get("/edit/{username}", [ListCntrl::class, "edit"])->name("edit");
    Route::post("/edit/{username}", [ListCntrl::class, "editPassword"])->name("editPassword");
    Route::get("/delete/{username}", [ListCntrl::class, "delete"])->name("delete");
    Route::post("/delete/{username}", [ListCntrl::class, "deleteFunction"])->name("deleteFunction");
    Route::get("/listofAll", [ListCntrl::class, "liste"]);
    Route::post("/deleteAllSelected",[ListCntrl::class,"deleteAll"])->name("deleteAllSelected");


//category
    Route::get("/category", function(){return view("Category.category"); })->name("category");
    Route::post("/category", function(){return view("Category.category"); })->name("categoryPost");
    Route::get("/addCategory", [CategoryCntrl::class, "display"])->name("addCategory");
    Route::post("/addCategory", [CategoryCntrl::class, "add"])->name("categoryAdd");
    Route::post("/categoryList", [CategoryCntrl::class, "displayList"])->name("categoryList");
    Route::get("/categoryList", [CategoryCntrl::class, "categoryListe"]);
    Route::get("/editCategory/{categorytitle}", [CategoryCntrl::class, "fillEditCategory"])->name("fillEditCategory");
    Route::post("/editCategory/{categorytitle}", [CategoryCntrl::class, "editCategory"])->name("editCategory");
    Route::get("/deleteCategory/{categorytitle}", [CategoryCntrl::class, "fillDeleteCategory"])->name("fillDeleteCategory");
    Route::post("/deleteCategory/{categorytitle}}", [CategoryCntrl::class, "deleteCategory"])->name("deleteCategory");

//product
    Route::get("/product", function(){return view("Product.product"); })->name("product");
    Route::get("/addProduct", [ProductCntrl::class, "display"])->name("addProduct");
    Route::post("/addProduct", [ProductCntrl::class, "add"])->name("productAdd");
    Route::get("/productList", [ProductCntrl::class, "productListe"])->name("productList");
    Route::get("/editProduct/{producttitle}", [ProductCntrl::class, "fillEditProduct"])->name("fillEditProduct");
    Route::post("/editProduct/{producttitle}", [ProductCntrl::class, "editProduct"])->name("editProduct");
    Route::get("/deleteProduct/{producttitle}", [ProductCntrl::class, "fillDeleteProduct"])->name("fillDeleteProduct");
    Route::post("/deleteProduct/{producttitle}}", [ProductCntrl::class, "deleteProduct"])->name("deleteProduct");

});


Route::get("/admin", function(){return view("layout.admin"); });
