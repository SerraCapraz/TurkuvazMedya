<?php

namespace App\Http\Controllers;

use App\Models\Bilgi;
use App\Models\iletisimModel;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryCntrl extends Controller
{
    public function display() {
        return view("addCategory");
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
        return view("categoryList");
    }

    public function categoryListe() {
        $categorydata=Category::all();
        return view("categoryList",compact("categorydata"));

    }
}
