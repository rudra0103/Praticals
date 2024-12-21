<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Package::paginate(5);
        return view ('package.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorys=Category::get();
        return view('package.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //     "package_name"=>"required",
        //     "package_desc"=>"required",
        //     "package_discount"=>"required | min:0",
        //     "package_price"=>"required |min:1",
        //     "package_pic"=>"required",
        //     "duration"=>"required",
        //     "route"=>"required",
        //     "detail_desc"=>"required",
        //     "category"=>"required"

        // ]);
         $imgname="cat_".time()."." . $request->package_pic->extension();
        $request->package_pic->move(public_path('img'),$imgname);
        $imgpath="/img/".$imgname;
        
        

        $table=new Package();
        $table->package_name=$request->package_name;
        $table->package_discount=$request->package_discount;
        $table->package_price=$request->package_price;
        
        $table->package_pic=$imgpath;
        $table->duration=$request->duration;
        $table->route=$request->route;
        $table->detail_desc=$request->detail_desc;
        $table->category=$request->category;
        $table->save();

        return redirect("package")->withSuccess("inserted Successfully!!");
    }

        

        

        
    

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
        return view('package.show',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
        $categories=Category::get();
        return view ('package.edit',compact('package','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
        $package->delete();
        return redirect('package')->withSuccess("Deleted Successfully!!");
    }
}
