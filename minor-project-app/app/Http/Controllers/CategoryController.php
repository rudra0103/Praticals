<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * from category
        $data=Category::paginate(3);
        return view('category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //insert form open
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //database insert
        $request->validate(
            [
                "category_name"=>"required | unique:category",
                // "category_pic"=>"required"
            ]
            );
            $imgname="cat_".time()."." . $request->category_pic->extension();
            $request->category_pic->move(public_path('img'),$imgname);
            $imgpath="/img/".$imgname;

            $category =new Category();
            $category->category_name=$request->category_name;
            $category->category_pic=$request->category_pic;

            $category->category_pic=$imgpath;

            
            $category->save();
            return redirect('category')->withSuccess("Insert Successfully");
            
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate(
            [
                "category_name"=>"required ",
                // "category_pic"=>"required"
            ]
            );
            $table=Category::find($category->_id);
            if(isset($request->category_pic))
            {

            $imgname="cat_".time()."." . $request->category_pic->extension();
            $request->category_pic->move(public_path('img'),$imgname);
            $imgpath="/img/".$imgname;
            
            }

            
            $table->category_name=$request->category_name;
            

            

            
            $table->save();
            return redirect('category')->withSuccess("updated Successfully");
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect("category")->withSuccess("Deleted Successfully!!");
    }
}
