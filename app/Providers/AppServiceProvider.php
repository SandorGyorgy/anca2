<?php

namespace App\Providers;
use View;
use Auth;
use App\Category;
use App\Cart;
use App\Order;
use App\Product;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
        
        view()->composer('*', function ($view) 
        {
            $items = 0;
            $cart = [];
            if(auth()->user()){
                $cart = Cart::where('user_id', Auth::user()->id)->where('order_id' , null)->get();
                if(count($cart) > 0){
                    
                    foreach($cart as $item){
                        $items +=  $item->quantity;
                        $product = Product::where('id' , $item->product_id)->get(); 
                        $item['name'] = $product[0]->nume;
                    }
                }
            }
                $view->with('cart', $cart)->with('items' , $items);    
        });  
        $categories = Category::all();
        View::share('categories' , $categories);
       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
