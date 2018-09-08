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

        $verify = Cart::where('product_id' , $product)->whereNull('order_id')->first();

        if($verify == null){

            $cart = new Cart;
            $item = Product::where('id' , $product)->first();
            $user = Auth::user();
            $cart->product_id = $product;
            $cart->user_id = $user->id;
            $cart->quantity = 1;
            $cart->subtotal = $item->pret;
            
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

    public function order(Request $request){

        $userId = Auth::user()->id;
        $cart = Cart::where('user_id' , $userId)->where('order_id' , null)->get();
       if(count($cart) > 0){
        $order = new Order;

        $order->user_id = $userId;
        $order->delivery = $request->livrare;
        $order->address = $request->adresa;
        $order->buyer = $request->destinatar;
        $order->total = $request->total;

        $order->save();     

        $cart->each->update(['order_id' => $order->id]);

       }
        return response()->json();
    }

    public function orders(){

        $user = Auth::user();
        $orders = Order::where('user_id' , $user->id)->with('items')->get();
        return view('Store\StoreInterface\userOrders', ['comenzi'=>$orders]);
    }

    public function admin(){

        $orders = Order::all();
        return view('Store\DashboardAdmin\orders' , ['orders'=> $orders]);
    }

}
