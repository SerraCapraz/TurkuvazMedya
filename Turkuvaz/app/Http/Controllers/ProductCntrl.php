<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCntrl extends Controller
{
    public function display() {
        $dataofcategory=Category::all();
        return view("addProduct",compact("dataofcategory"));
    }

    public function add(Request $request) {
        $request->validate([
            "producttitle"=>"required|",
            "productcategoryid"=>"required|nullable",
            "barcode"=>"required",
            "productstatus"=>"required",
        ]);

        $producttitle = $request->producttitle;
        $productcategoryid = $request->productcategoryid;
        $barcode = $request->barcode;
        $productstatus = $request->productstatus;

        Product::create(["producttitle"=>$producttitle,
            "productcategoryid"=>$productcategoryid,
            "barcode"=>$barcode,
            "productstatus"=>$productstatus,

        ]);
        return redirect()->route("product");

    }


}
