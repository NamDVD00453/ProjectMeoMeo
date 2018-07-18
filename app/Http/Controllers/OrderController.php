<?php

namespace App\Http\Controllers;

use App\Category;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use function MongoDB\BSON\toJSON;

class OrderController extends Controller
{
    //
    public function addToCart(Request $request, $productId)
    {
        $product = Product::where('productId', '=', $productId)->firstOrFail();
        $list = array();
        array_push($list, $productId);


    }

    public function showCart(Request $request)
    {
        $value = $request->cookie('cart');

        $obj = json_decode($value, true);

        $list = array();

        $total = 0;

        foreach ($obj as $key=>$value)
        {
            $product = Product::where("productID", "=", $key)->firstOrFail();
//            $orderDetail = new OrderDetail();
//            $orderDetail->productName = $product->productName;
//            $orderDetail->img = $product->img;
//            $orderDetail->quantity = $value;
            $price = (int)str_replace('.', '', $product->productPrice);

            $total = $total + $value * $price;

            $orderDetail =
                [
                    "productId" => $product->productId,
                    "productName" => $product->productName,
                    "img" => $product->img,
                    "quantity" => $value,
                    "price" => $product->productPrice.' VND'

                ];
//            $orderDetail->productName = $product->productName;
//            $orderDetail->img = $product->img;
//            $orderDetail->quantity = $value;



            array_push($list, $orderDetail);
        }

//        return $list;




        return view('layouts.cart')->with([
            "listProduct" => Product::all(),
            "listCategory" => Category::all(),
            "listOrder" => $list,
            "total" => $total
        ]);
    }







}
