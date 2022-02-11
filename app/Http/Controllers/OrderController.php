<?php

namespace RainbowDigital\Http\Controllers;

use Illuminate\Http\Request;

use RainbowDigital\Order;
use RainbowDigital\Customer;
class OrderController extends Controller
{
    public function EditOrder($id)
    {
    	
        $order = Order::find($id);
        $customer=Customer::find($id);

        return view('orderedit',compact('order','customer'));
    }
    public function UpdateOrder(Request $request, $id)
    {

    	$order = Order::find($id);

    	$order->pay = $request->pay;
        $order->due = $request->due;
        $order->save();

        return redirect()->back();
    }
}
