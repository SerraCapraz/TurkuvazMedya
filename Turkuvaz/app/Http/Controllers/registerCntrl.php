<?php

namespace App\Http\Controllers;

use App\Models\iletisimModel;
use Illuminate\Http\Request;
use App\Models\Login;

class registerCntrl extends Controller
{
    public function display() {
        return view("registerPanel");
    }

    public function add(Request $request) {
        $request->validate([
            "username"=>"required|alpha_num:ascii|unique:users",
            "usertitle"=>"required",
            "password"=>"required|min:6",
        ]);

        $username = $request->username;
        $usertitle = $request->usertitle;
        $password = $request->password;

        Login::create(["username"=>$username,
            "usertitle"=>$usertitle,
            "password"=>$password,

        ]);
        return view("homepage");

    }
}
