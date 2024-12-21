<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(){
        $user=session()->put("key","value");
        $data=Cart::get();
        return view('cart',compact('data'));
    }
}
