<?php
namespace App\Http\Controllers;


use App\Order;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class OrdersController extends Controller
{
    public function addToCart($product){

        $verify = Cart::where('product_id' , $product)->first();

        if($verify == null){

            $cart = new Cart;
            $item = Product::where('id' , $product)->first();
            $user = Auth::user();
            $cart->product_id = $product;
            $cart->user_id = $user->id;
            $cart->quantity = 1;
            $cart->subtotal = $item->pret;
            $cart->is_ordered = 0;
    
            $cart->save();
        }else{
            $verify->quantity += 1;
            $item = Product::where('id' , $product)->first();
            $verify->subtotal += $item->pret;
            $verify->update();
        }

        return redirect()->back();
    }

    public function add($id){

        $item = Cart::where('id', $id)->first();
        $product = Product::where('id' , $item->product_id)->first();
        $item->quantity +=1;
        $item->subtotal += $product->pret; 
        $item->update();
        return redirect()->back();
    }

    public function substract($id){

        $item = Cart::where('id', $id)->first();
        $product = Product::where('id' , $item->product_id)->first();
        $item->quantity -=1;
        $item->subtotal -= $product->pret;
        if($item->quantity > 0){
            $item->update();
        } else{
            $item->delete();
        }
        
        return redirect()->back();
    }

    public function delete($id){
        $item = Cart::where('id', $id)->first();
        $item->delete();

        return redirect()->back();
    }

}
