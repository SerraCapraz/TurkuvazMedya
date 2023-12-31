<?php

namespace App\Http\Controllers;

use App\Models\Bilgi;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;


class ListCntrl extends Controller
{

    public function display() {
        return view("User.list");
    }

    public function liste() {
        //$data=Login::withTrashed()->get();
        $data=User::all();
        return view("User.list",compact("data"));

    }


    public function edit($username) {
        $user=User::where("username","=",$username)->first();
        return view("User.edit",compact("user"));
    }

    public function editPassword(Request $request, $username) {

        $request->validate([
            "username"=>"alpha_num:ascii",
            "usertitle"=>"",
            "password"=>"min:6|nullable",
        ]);

        if(!($request->username == $username)) {
            $newuser = User::where("username","=",$request->username)->first();
            if(!($newuser == null)) {
                return back();
            }
        }
        $usernamereq = $request->username;
        $usertitle = $request->usertitle;
        $password = $request->password;


        if($password == null) {
            User::where("username","=",$username)->update([
                "username"=>$usernamereq,
                "usertitle"=>$usertitle,

            ]);
        }
        else {
            User::where("username","=",$username)->update([
                "username"=>$usernamereq,
                "usertitle"=>$usertitle,
                "password"=>Hash::make($password),

            ]);
        }
        /*
        Login::where("username","=",$username)->update([
            "username"=>$usernamereq,
            "usertitle"=>$usertitle,
            "password"=>$password,
        ]);*/

        $data=User::all();
        return view("User.list",compact("data"));
    }

    public function delete($username) {
        $user=User::where("username","=",$username)->first();
        return view("User.delete",compact("user"));
    }

    public function deleteFunction($username) {
        User::where("username","=",$username)->delete();
        $data=User::all();
        return view("User.list",compact("data"));
    }

    public function deleteAll(Request $request) {
        $ids=$request->ids;
        if(!($ids == null)) {
            User::whereIn("id",$ids)->delete();
        }
        return redirect()->route("list");
    }








}
