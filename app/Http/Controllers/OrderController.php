<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Input;
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

    public function addOrder(Request $request){
        $order = new Order();

        $currentTime = Carbon::now()->addHours(7)->toDateString();
        $millitime = round(microtime(true) * 1000);




        $order->status = 0;
        $order->orderId = $millitime;
        $order->orderDate = $currentTime;

        $order->shipName = Input::get('shipName');
        $order->shipPhone = Input::get('shipPhone');
        $order->shipAddress = Input::get('shipAddress');
        $order->customerEmail = Input::get('customerEmail');
        $order->orderDetail = $request->cookie('cart');

//        return $order;

        $listOrder = json_decode($order->orderDetail);

        $totalPrice = 0;

        foreach($listOrder as $key=>$value){

            //key la id san pham
            //value la so luong san pham
            $product = Product::where('productId', '=', $key)->firstOrFail();
            $price = (int)str_replace('.', '', $product->productPrice);
            $totalPrice = $totalPrice + $value * $price;

            $orderDetail = new OrderDetail();
            $orderDetail->orderId = $millitime;
            $orderDetail->productId = $key;
            $orderDetail->quantity = $value;
            $orderDetail->unitPrice = $price;

            $orderDetail->save();


        }

        $order->totalPrice = $totalPrice;

        $order->save();
        return redirect('/')->withCookie(Cookie::forget('cart'));

//        return  $currentTime;

    }

}
