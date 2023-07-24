<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginCntrl extends Controller
{

    public function display2() {
        return view("loginPanel");
    }

    public function loginUser(Request $request) {
        $request->validate([
            "username"=>"exists:users",
            "password"=>"",
        ]);

        $username = $request->username;
        //$usertitle = $request->usertitle;
        $password = $request->password;

        $user = User::where("username",$username)->first();
        if($user) {
            if(Hash::check($password,$user->password)) {
                return view("homepage");
            }
            else {
                $request->validate([
                    "password"=>"password",
                ]);
                return redirect()->route("logReg");
            }
        }
        else {
            return back();
        }
    }

}
