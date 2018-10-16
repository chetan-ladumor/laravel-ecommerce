<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;  // cart facade

class ShoppingController extends Controller
{
    public function add_to_cart(Request $request)
    {
    	$product = Product::find($request->pdt_id);

    	$cartItem=Cart::add([
    		'id'=>$product->id,
    		'name'=>$product->name,
    		'qty'=>$request->qty,
    		'price'=>$product->price,
    		'image'=>$product->image
    	]);
    	//associate the cart with particular model
    	Cart::associate($cartItem->rowId,'App\Product');
    	//dd(Cart::content()); //get all the products in the cart
    	return redirect()->route('cart');
    }

    public function cart()
    {
    	//cart::destroy();
    	return view('cart');
    }

    public function product_delete($id)
    {
    	cart::remove($id);
    	return redirect()->back();
    }

    public function increment_product_qty($id,$qty)
    {
    	Cart::update($id,$qty+1);
    	return redirect()->back();
    }

    public function decrement_product_qty($id,$qty)
    {
    	Cart::update($id,$qty-1);
    	return redirect()->back();
    }

    public function rapid_add($id)
    {
    	$product = Product::find($id);

    	$cartItem=Cart::add([
    		'id'=>$product->id,
    		'name'=>$product->name,
    		'qty'=>1,
    		'price'=>$product->price,
    		'image'=>$product->image
    	]);
    	//associate the cart with particular model
    	Cart::associate($cartItem->rowId,'App\Product');
    	//dd(Cart::content()); //get all the products in the cart
    	return redirect()->route('cart');
    }

    public function checkout()
    {
    	return view('checkout');
    }
}
