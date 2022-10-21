<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_Detail;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        return view('order.index',compact('orders'));
    }


    public function detail($id = null) {
        $order_details = Order_Detail::where('order_id', $id)->get();
        return view('order.tempDetail',compact('order_details'));
    }

}
