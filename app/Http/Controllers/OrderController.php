<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_Detail;
use Carbon\Carbon;
use App\Models\User;
class OrderController extends Controller
{
    public function index() {


        // Show latest order by id first.
        // $orders = Order::latest()->orderBy('id', 'desc')->get();
        $orders = Order::all();
        
        // change name id to name string each user.
        foreach ( $orders as $order){
            $order->user_id = User::where('id', $order->user_id)->first()->name;
        }

        return view('order.index',compact('orders'));
    }


    public function detail($id = null) {
        $order_details = Order_Detail::where('order_id', $id)->get();
        return view('order.tempDetail',compact('order_details'));
    }

    // Create order in database
    public function create(Request $body){
    
        $order = new Order();
        $order->user_id = $body->cust_userid;
        $order->order_ref = $this->create_order_id();
        $order->status = 0;
        $order->save();

        foreach (json_decode($body->jsonDataCart) as $p){
            $order_details = new Order_Detail();
            $order_details->order_id = $order->id;
            $order_details->product_id = $p->id;
            $order_details->qty = $p->qty;
            $order_details->price = $p->price;
            $order_details->total = $p->price * $p->qty;
            $order_details->save();
        }

        return 0;
    }



    // Created use function for generating order id
    public function create_order_id(){
        //format "PO20180218####"
        //format "POYYYYMMDD####" 14 characters

        $latestOrder = Order::orderBy('created_at','DESC')->first();
        
        if($latestOrder->created_at->format('Y-m-d') != Carbon::now()->format('Y-m-d')){
            $orderDigit = "0001";
        }else{
            $latestDigit = substr($latestOrder->order_ref, 10, 4);
            $orderDigit = sprintf('%04s', ((int)$latestDigit)+1); 

        }

        $order_id = 'PO'.date('Ymd').$orderDigit;
        return $order_id;

       
    }

}
