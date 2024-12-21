<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
               $ValidatedData=$request->validate([
                   'email'=>'nullable|string',
                   'password'=>'nullable',
                   'city'=>'nullable|string',
               ]);

               Product::create($ValidatedData);
               return redirect()->route('form')->with('success','Product Added Succesfully');            
    }
    public function list()
    {
        $product=Product::all();
        return view('list',compact('product'));
    }

    public function delete($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->route('list')->with('Success','Product Has Been Deleted');
    }

    public function update(Request $request,$id)
    {
        $product=Product::findOrfail($id);
        $validatedData=$request->validate([
            'email'=>'required|string|max:250',
            'password'=>'required',
            'city'=>'required|string|max:250'
        ]);
        $product->update($validatedData);
        return redirect()->route('list')->with('success','Product has Been Updated');
    }
}
