<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\MessageBag;

use App\Upload;

use App\Cart;

use App\Order;

use DB;

class OrderController extends Controller
{

	    public function store(Request $request){

	    $item_id=[];
    	$uploads = DB::table('carts')->pluck('item_id');

    	foreach ($uploads as $upload) {
    		$item_id[]= $upload;
    	}

    	$order = new Order;
    	$order->name = $request->name;
    	$order->lastname = $request->lastname;
    	$order->email = $request->email;
    	$order->address = $request->address;
    	$order->city = $request->city;
    	$order->zipcode = $request->zipcode;
    	$order->phone = $request->phone;
    	$order->item_id= $item_id;
    	$order->note = $request->note;
    	$order->save();

    	return redirect()->back()->with('success', ['You have successfully ordered']);
 
    }

    public function orders(){

        $orders = Order::all();
        //$orders[]= Order::pluck('item_id');
        $items[] = Order::pluck('item_id');


       return view('uploads.orders',compact('orders','items'));
    }

}
