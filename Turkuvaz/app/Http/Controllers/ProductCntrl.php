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
            "producttitle"=>"required",
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
    /*
    public function displayList() {
        return view("listProduct");
    }*/

    public function productListe() {
        $productdata=Product::all();
        return view("listProduct",compact("productdata"));

    }

    public function fillEditProduct($producttitle) {
        $product_var=Product::where("producttitle","=",$producttitle)->first();
        $dataofcategory=Category::all();
        return view("editProduct",compact("dataofcategory","product_var"));
    }

    public function editProduct(Request $request, $producttitle) {
        $request->validate([
            "producttitle"=>"required",
            "productcategoryid"=>"required|nullable",
            "barcode"=>"required",
            "productstatus"=>"required",
        ]);

        $producttitlereq = $request->producttitle;
        $productcategoryid = $request->productcategoryid;
        $barcode = $request->barcode;
        $productstatus = $request->productstatus;


        Product::where("producttitle","=",$producttitle)->update([
            "producttitle"=>$producttitlereq,
            "productcategoryid"=>$productcategoryid,
            "barcode"=>$barcode,
            "productstatus"=>$productstatus,
        ]);

        $productdata=Product::all();
        return view("listProduct",compact("productdata"));
    }

    public function fillDeleteProduct($producttitle) {
        $product_var=Product::where("producttitle","=",$producttitle)->first();
        return view("deleteProduct",compact("product_var"));
    }

    public function deleteProduct($producttitle) {
        Product::where("producttitle","=",$producttitle)->delete();
        $productdata=Product::all();
        return view("listProduct",compact("productdata"));
    }


}
