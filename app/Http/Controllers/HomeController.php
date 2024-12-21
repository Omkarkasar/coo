<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function edit($id)
    {
        $data=Product::findOrFail($id);
        return view('edit',compact('data'));
    }
}
