<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = product::orderBy('created_at','desc')->paginate(16);
        return view('Products',compact('products'));
    }

    function create()
    {
        $categories = category::all();
        return view('products.create',compact('categories'));
    }

    function show(product $product1)
    {
        return view('products.Products_Details',compact('product1'));
    }

    //function delete()
    //{
    //return "deleted";
    //}


    function store(Request $request)
    {
        try
        {
            $this->validate($request,['name'=>['required','max:200'],'price'=>'required','description'=>'required','mobile'=>'required']);
            product::create(['name'=>$request->name,'price'=>$request->price,'category_id'=>$request->category_id,'description'=>$request->description,'mobile'=>$request->mobile])->save();
            return redirect()->route('product')->with('status',"inserted succussfuly");
        }
        catch (\Exception $e){
            return redirect()->back()->with('status',"faild");
        }
    }
}
