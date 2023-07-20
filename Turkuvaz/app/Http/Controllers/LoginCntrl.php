<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginCntrl extends Controller
{

    public function display2() {
        return view("loginPanel");
    }

    public function loginUser(Request $request) {

        $username = $request->username;
        $usertitle = $request->usertitle;
        $password = $request->password;

        $user = User::where("username",$username)->first();
        if($user) {
            if(Hash::check($password,$user->password)) {
                return view("homepage");
            }
            else {
                return redirect()->back();
            }
        }
        else {
            return back();
        }
    }

}
