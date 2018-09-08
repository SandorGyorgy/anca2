<?php
use App\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/tandemjump', function (){
    return view('tandem');
})->name('tandemjump');


Route::get('/affjump', function (){
    return view('aff');
})->name('affjump');


Route::get('/advancedjump', function (){
    return view('advanced');
})->name('advancedjump');


Route::get('/about', function (){
    return view('about');
})->name('about');


Route::get('/staff', function (){
    return view('staff');
})->name('staff');



Route::get('/rules', function (){
    return view('rules');
})->name('rules');



Route::get('/preturi', function (){
    return view('preturi');
})->name('preturi');






//sectiunea utilizator


Route::get('/skydivestore', function ()
{    return view('store');
})->name('skydivestore');

Route::get('/store/{category}/{subcategory?}' , 'CategoriesController@show');


Route::get('/cart' , function(){
return view('Store\StoreInterface\Cart');});

Route::get('/add/{products}' , 'OrdersController@addToCart');

Route::get('/plus/{id}' , 'OrdersController@add');

Route::get('/substract/{id}' , 'OrdersController@substract');

Route::get('/delete/item/{id}' , 'OrdersController@delete'); 

Route::get('/checkout' , function(){
    return view('Store\StoreInterface\checkOut');
});

Route::post('/order' , 'OrdersController@order');
Route::get('/orders' , 'OrdersController@orders');

//sectiunea utilizator





// sectiunea de admin 


    //rute pentru paginile adminului
        Route::get('/dashboard' , function(){
        return view('Store\dashboard');
        })->name('dashboard');

        Route::get('/dashboard/addCategories' , function(){
            return view('Store\DashBoardAdmin\adaugaCategorii');
        })->name('adaugaCategorii');

        Route::get('/dashboard/addProducts' , 'ProductsController@index' )->name('adaugaProduse');

        Route::get('/dashboard/addSubcategories' , function(){
            return view('Store\DashBoardAdmin\adaugaSubcategorii');
        })->name('adaugaSubcategorii');

        Route::get('/dashboard/ProductList' , 'ProductsController@produse')->name('listaProduse');
        Route::get('/user/orders' , 'OrdersController@admin');

    



    //rute pentru actiunile adminului
        Route::post('/add/category' , 'CategoriesController@store');
        Route::post('/add/subcategory' , 'SubcategoriesController@store');
        Route::post('/add/product' , 'ProductsController@store');
        Route::get('/delete/product/{id}' , 'ProductsController@delete')->name('delete');
        Route::get('/show/product/{id}' , 'ProductsController@show')->name('show');
        Route::post('/edit/post' , 'ProductsController@edit')->name('edit');

//sectiunea de admin