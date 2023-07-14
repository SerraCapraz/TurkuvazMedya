<?php

namespace App\Http\Controllers;

use App\Models\Bilgi;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Login;


class ListCntrl extends Controller
{

    public function display3() {
        return view("list");
    }

    public function liste() {
        $data=Login::get()->all();
        return view("list",compact("data"));
        /*
        foreach ($data as $key => $value) {
            echo $value->id." ".$value->metin;
            echo "<br>";
        }*/
    }

    public function displayEdit() {
        return view("edit");
    }

    public function displayDelete() {
        return view("delete");
    }

    public function edit($username) {
        $user=Login::where("username","=",$username)->first();
        return view("edit",compact("user"));
    }






}
