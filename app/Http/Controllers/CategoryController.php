<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function createcat()
    {
        return view('products.createcat');
    }

    function storecat(Request $request)
    {
        try
        {
            $this->validate($request,['name'=>['required','max:200']]);
            category::create(['name'=>$request->name])->save();
            return redirect()->route('product')->with('status',"inserted Category successfully");
        }
        catch (\Exception $e){
            dd($e);
            return redirect()->back()->with('status',"faild");
        }
    }
}
