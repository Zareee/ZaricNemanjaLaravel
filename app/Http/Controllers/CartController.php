<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Upload;

use App\Cart;

use App\Order;

use DB;

class CartController extends Controller
{

    public function cart(Request $request){

        $uploads = DB::table('uploads')->where('id', $request->id)->first();
      
        $cart = new cart;
        $cart->user_ip=trim($_SERVER['REMOTE_ADDR']);
        $cart->item_id=$request->id;
        $cart->title=$uploads->title;
        $cart->price=$uploads->price;
        $cart->description=$uploads->description;
        $cart->image=$uploads->image;
        $cart->save();

        return response('This item has been added to Cart');

    }

    public function cartview(){

    	$count = Cart::count();

        $price = Cart::sum('price');

        $carts = Cart::all();

        return view('uploads.cart',compact('carts','count','price'));
    }


        public function remove($id){

        $image = Cart::find($id)->delete();   

        return redirect()->back();
    }

}
