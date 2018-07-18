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
        return view('adminlayouts.dashboard')->with([
            "listProduct" => Product::all(),
            "listCategory" => Category::all()
        ]);
    }
}
