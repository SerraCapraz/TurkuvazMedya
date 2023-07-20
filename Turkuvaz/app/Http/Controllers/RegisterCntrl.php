<?php

namespace App\Http\Controllers;

use App\Models\iletisimModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterCntrl extends Controller
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

        User::create(["username"=>$username,
            "usertitle"=>$usertitle,
            "password"=> Hash::make($password),

        ]);

        return view("user");

    }
}
