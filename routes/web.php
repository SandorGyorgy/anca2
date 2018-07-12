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

Route::get('/helmets/full face' , function(){
    return view('Store\Casti\full face');
})->name('full face');

Route::get('/helmets/open face' , function(){
    return view('Store\Casti\open face');
})->name('open face');







Route::get('skydivestore/instruments', function ()
{
    return view('Store\instruments');
})->name('instruments');

Route::get('/instruments/aad' , function(){
    return view('Store\Instrumente\aad');
})->name('aad');

Route::get('/instruments/audibile' , function(){
    return view('Store\Instrumente\audibile');
})->name('audibile');

Route::get('/instruments/altimetre' , function(){
    return view('Store\Instrumente\altimetre');
})->name('altimetre');







Route::get('skydivestore/canopies', function ()
{
    return view('Store\canopies');
})->name('canopies');

Route::get('/canopies/main' , function(){
    return view('Store\Canopy\main');
})->name('main');

Route::get('/canopies/emergency' , function(){
    return view('Store\Canopy\emergency');
})->name('emergency');

Route::get('/canopies/tandem' , function(){
    return view('Store\Canopy\tandem');
})->name('tandem');













Route::get('skydivestore/rigs', function ()
{
    return view('Store\rigs');
})->name('rigs');

Route::get('/rigs/cutaway' , function(){
    return view('Store\Rigs\cutaway');
})->name('cutaway');

Route::get('/rigs/container' , function(){
    return view('Store\Rigs\container');
})->name('container');








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

Route::get('/dashboard/ProductList' , function(){
    return view('Store\DashBoardAdmin\listaProduse');
})->name('listaProduse');






Route::get('/accesories' , function(){
    return view('Store\accesories');
})->name('accesories');

Route::get('/accesories/addConsumbile' , function(){
    return view('Store\Accesorii\consumabile');
})->name('consumabile');

Route::get('/accesories/ochelari protectie' , function(){
    return view('Store\Accesorii\ochelari protectie');
})->name('ochelari protectie');

Route::get('/accesories/manusi protectie' , function(){
    return view('Store\Accesorii\manusi protectie');
})->name('manusi protectie');

Route::get('/accesories/gopro' , function(){
    return view('Store\Accesorii\gopro');
})->name('gopro');






Route::get('/flywear', function(){
    return view('Store\flyware');
})->name('flywear');

Route::get('/flywear/jumpsuit' , function(){
    return view('Store\Flywear\jumpsuit');
})->name('jumpsuit');

Route::get('/flywear/tracksuit' , function(){
    return view('Store\Flywear\tracksuit');
})->name('tracksuit');

Route::get('/flywear/wingsuit' , function(){
    return view('Store\Flywear\wingsuit');
})->name('wingsuit');


Route::post('/add/category' , 'CategoriesController@store');
Route::post('/add/subcategory' , 'SubcategoriesController@store');


