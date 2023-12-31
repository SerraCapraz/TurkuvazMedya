<?php

namespace App\Http\Controllers;

use App\Models\Bilgi;
use App\Models\iletisimModel;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryCntrl extends Controller
{
    public function display() {
        return view("Category.addCategory");
    }

    public function add(Request $request) {
        $request->validate([
            "categorytitle"=>"required|unique:categories",
            "categorydescription"=>"required",
            "categorystatus"=>"required",
        ]);

        $categorytitle = $request->categorytitle;
        $categorydescription = $request->categorydescription;
        $categorystatus = $request->categorystatus;

        Category::create(["categorytitle"=>$categorytitle,
            "categorydescription"=>$categorydescription,
            "categorystatus"=>$categorystatus,

        ]);
        return redirect()->route("category");

    }

    public function displayList() {
        return view("Category.categoryList");
    }

    public function categoryListe() {
        $categorydata=Category::all();
        return view("Category.categoryList",compact("categorydata"));

    }

    public function fillEditCategory($categorytitle) {
        $category_var=Category::where("categorytitle","=",$categorytitle)->first();
        return view("Category.editCategory",compact("category_var"));
    }

    public function editCategory(Request $request, $categorytitle) {
        $request->validate([
            "categorytitle"=>"required",
            "categorydescription"=>"required",
            "categorystatus"=>"required",
        ]);

        if(!($request->categorytitle == $categorytitle)) {
            $new_category_var = Category::where("categorytitle","=",$request->categorytitle)->first();
            if(!($new_category_var == null)) {
                $request->validate([
                    "categorytitle"=>"unique:categories",
                ]);
                return back();
            }
        }
        $categorytitlereq = $request->categorytitle;
        $categorydescription = $request->categorydescription;
        $categorystatus = $request->categorystatus;


        Category::where("categorytitle","=",$categorytitle)->update([
            "categorytitle"=>$categorytitlereq,
            "categorydescription"=>$categorydescription,
            "categorystatus"=>$categorystatus,
        ]);

        $categorydata=Category::all();
        return view("Category.categoryList",compact("categorydata"));
    }

    public function fillDeleteCategory($categorytitle) {
        $category_var=Category::where("categorytitle","=",$categorytitle)->first();
        return view("Category.deleteCategory",compact("category_var"));
    }

    public function deleteCategory($categorytitle) {
        $category_var=Category::where("categorytitle","=",$categorytitle)->first();
        Product::whereIn("productcategoryid",$category_var)->update([
            "productcategoryid"=>null,
        ]);
        Category::where("categorytitle","=",$categorytitle)->delete();
        $categorydata=Category::all();

        return view("Category.categoryList",compact("categorydata"));
    }
}
