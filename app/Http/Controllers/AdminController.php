<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('adminlayouts.dashboard');
    }


    public function allProduct()
    {
        return view('adminlayouts.allproduct')->with([
            "listProduct" => Product::all(),
            "listCategory" => Category::all()
        ]);
    }

    public function allCategory()
    {
        return view('adminlayouts.allCategory')->with([
            "listProduct" => Product::all(),
            "listCategory" => Category::all()
        ]);
    }


}
