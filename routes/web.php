<?php

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



Route::get('/skydivestore', function ()
{
    return view('store');
})->name('skydivestore');



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





//rutele pentru skydivestore
Route::get('skydivestore/helmets', function ()
{
    return view('Store\helmets');
})->name('helmets');

Route::get('skydivestore/instruments', function ()
{
    return view('Store\instruments');
})->name('instruments');

Route::get('skydivestore/canopies', function ()
{
    return view('Store\canopies');
})->name('canopies');

Route::get('skydivestore/rigs', function ()
{
    return view('Store\rigs');
})->name('rigs');

Route::get('/dashboard' , function(){
return view('Store\dashboard');
})->name('dashboard');

Route::get('/dashboard/addCategories' , function(){
    return view('Store\DashBoardAdmin\adaugaCategorii');
})->name('adaugaCategorii');

Route::get('/dashboard/addProducts' , function(){
    return view('Store\DashBoardAdmin\adaugaProduse');
})->name('adaugaProduse');

Route::get('/dashboard/addSubcategories' , function(){
    return view('Store\DashBoardAdmin\adaugaSubcategorii');
})->name('adaugaSubcategorii');

Route::get('/dashboard/ProductList' , function(){
    return view('Store\DashBoardAdmin\listaProduse');
})->name('listaProduse');

Route::get('/accesories' , function(){
    return view('Store\accesories');
})->name('accesories');

Route::get('/flywear', function(){
    return view('Store\flyware');
})->name('flywear');


