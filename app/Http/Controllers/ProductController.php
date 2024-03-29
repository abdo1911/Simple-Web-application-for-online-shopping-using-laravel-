<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    function index()
    {
        $products = product::orderBy('created_at','desc')->paginate(10);
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

    function delete(product $product)
    {
        Storage::delete($product);
        $product->delete();
        return redirect()->back()->with('status',"Product Deleted Successfully");
    }

    function edit(product $product)
    {
        $categories = category::all();
        return view('products.edit',compact('categories','product'));
    }

    function store(Request $request)
    {
        try
        {
            $this->validate($request,['name'=>['required','max:200'],'price'=>'required','description'=>'required','mobile'=>'required','logo'=>'required']);
            $file = $request->file('logo');
            $path="";
            if($file)
            {
                $filename = Str::uuid().$file->getClientOriginalName();
                $file->move(public_path('images'),$filename);
                $path ='images/'.$filename;
            }
            product::create(['name'=>$request->name,'price'=>$request->price,'category_id'=>$request->category_id,'description'=>$request->description,'mobile'=>$request->mobile,'logo'=>$path])->save();
            return redirect()->route('product')->with('status',"Inserted Product Successfully");
        }
        catch (\Exception $e){
            dd($e);
            return redirect()->back()->with('status',"faild");
        }
    }
    function Update(Request $request, product $product)
    {
        try
        {
            $this->validate($request,['name'=>['required','max:200'],'price'=>'required','description'=>'required','mobile'=>'required','logo'=>'required']);
            $file = $request->file('logo');
            $path="";
            if($file)
            {
                $filename = Str::uuid().$file->getClientOriginalName();
                $file->move(public_path('images'),$filename);
                $path ='images/'.$filename;
            }
            $product->update(['name'=>$request->name,'price'=>$request->price,'category_id'=>$request->category_id,'description'=>$request->description,'mobile'=>$request->mobile,'logo'=>$path]);
            return redirect()->route('product')->with('status',"updated Successfully");
        }
        catch (\Exception $e){
            dd($e);
            return redirect()->back()->with('status',"failed");
        }
    }
}
