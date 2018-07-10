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


Route::get('skydivestore/accesories', function ()
{
    return view('accesories');
})->name('accesories');

Route::get('skydivestore/helmets', function ()
{
    return view('helmets');
})->name('helmets');

Route::get('skydivestore/instruments', function ()
{
    return view('instruments');
})->name('instruments');

Route::get('skydivestore/flywear', function ()
{
    return view('flywear');
})->name('flywear');

Route::get('skydivestore/canopies', function ()
{
    return view('canopies');
})->name('canopies');

Route::get('skydivestore/rigs', function ()
{
    return view('rigs');
})->name('rigs');

Route::get('/dashboard' , function(){
return view('dashboard');
})->name('dashboard');

Route::get('/test' , function(){
return view();
})-name('test');