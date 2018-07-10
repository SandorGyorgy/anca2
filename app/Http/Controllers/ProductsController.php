<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $categories = Category::all();
        $subcategory = Subcategory::all();

        return view('Store\DashBoardAdmin\adaugaProduse', ['categorii'=>$categories , 'subcategorii'=> $subcategory]);
    }
}
