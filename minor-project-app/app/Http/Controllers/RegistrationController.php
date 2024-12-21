<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index()
    {
        return view ('registation');
    }
    public function submitdata(Request $request){
        $request->validate([
            "fullname"=>'required',
            "username"=>'required',
            "password"=>'required|min:6|max:12',
            "email"=>'email|email',
            "mobileno"=>'required',
            "address"=>'required',

        ]);
        echo $request->fullname."<br>";
        echo $request->username."<br>";
        echo $request->password."<br>";
        echo $request->email."<br>";
        echo $request->mobileno."<br>";
        echo $request->address;
    }
}
