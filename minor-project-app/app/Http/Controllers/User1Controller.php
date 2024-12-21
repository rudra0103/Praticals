<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use App\Models\User1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    //
    public function index(){
    return view ('registration');
    }

    public function index1(){
        return view ('login');
    }

    public function index2(){
        return view ('about');
    }

    public function index3(){
        return view ('contact');
    }
    public function registration(Request $request)
    {
        $request->validate(
            [
                 "username"=>"required  | unique:user",
                "email"=>"required  | unique:user",
                "password"=>"required | min:6",
                "con_password"=>"required | same:password",
                "address"=>"required",
                "mobileno"=>"required | numeric | digits:10",
                "fullname"=>"required"
            ]
        );
        
        $table = new User1();
        $table->fullname = $request->fullname;
        $table->username = $request->username;
        $table->password = $request->password;
        $table->email = $request->email;
        $table->address = $request->address;
        $table->save();
        return redirect("login")->withSuccess('Registerd Successfully');

    }

    public function login(Request $request)
    {
        $request->validate([
            "username"=>"required",
            "password"=>"required"

        ]);
        $user=User1::where("username",$request->username)
        ->where("password",$request->password)->first();
        if(strcmp($request->username,"admin")==0 && strcmp($request->password,"admin")==0){
            return redirect("admin");

        }else if($user!=null){
            session()->put("user",$user);
            return redirect("/");
        }else{
            return back()->withSuccess("Invaild username/password");
        }
    }

    public function getAllUser(){
        $user=User1::get();
        return view("adminuser",compact('user'));
    }
     public function home(){
        $cats=Category::get();
        $packs=Package::get();
        return view('home',compact('cats','packs'));
     }
      
     public function more($id){
        $product=Package::where('_id',$id)->first();
        return view('productdetail',compact('product'));
     }
     public function explore(){
        $cats=Category::get();
        $packs=Package::get();
        return view('explore',compact('cats','packs'));

     }
     public function search(Request $request){
        $search=$request->search;
        $packs=Package::where('package_name','LIKE',"%serach%")->get();
        return view('explore',compact('packs'));
     }
}
