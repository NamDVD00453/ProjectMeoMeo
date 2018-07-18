<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.master')->with([
            "listProduct" => Product::all(),
            "listCategory" => Category::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function item(Request $request, $productId)
    {

        $product = Product::where('productId', '=', $productId)->firstOrFail();
        $productName = $product->productName;

        return view('layouts.product')->with([
            "product" => $product
        ]);
    }



    public function create()
    {
        //
        return view('adminlayouts.addnew')->with([
            "listCategory" => Category::all()
        ]);
    }

    public function insert()
    {

        $product = new Product();



        if (Input::get('productName' == null))
        {
            return redirect('/admin/addProduct')->with('status', 'Products name cannot be empty!');
        } else
        {
            $product->productName = Input::get('productName');
            if (Input::get('productDesc' == null))
            {
                return 'Products description cannot be empty';
            } else
            {
                $product->productDesc = Input::get('productDesc');
                if (Input::get('productPrice' == null))
                {
                    return 'Products price cannot be empty';
                } else
                {
                    $product->productPrice = Input::get('productPrice');
                    if (Input::get('productImg' == null))
                    {
                        return 'Products Image cannot be empty';
                    } else
                    {
                        $product->img = Input::get('productImg');

                        if (Input::get('productCategory' == null))
                        {
                            return 'Products Image cannot be empty';
                        } else
                        {
                            $product->categoryId = Input::get('productCategory');
                            $product->save();


                            return redirect('/admin/addProduct')->with('status', 'Product saved!');
                        };
                    };
                };
            };
        };








//        if ($c == 'T')
//        {
////            $product->save();
//            return redirect('/admin/addProduct')->with('status', 'Product saved!');
//        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function delete(Request $request, $productId)
    {
        $product = Product::where('productId', '=', $productId)->firstOrFail();
        $name = $product->productName;
        $product->delete();
//        return 'Delete product <' + $product->productName + '> Complete!';
        return 'Product deleted!';
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
