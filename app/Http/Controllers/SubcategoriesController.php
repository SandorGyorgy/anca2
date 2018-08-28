<?php

namespace App\Http\Controllers;
use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    public function store(Request $request){
        $subcategory = new Subcategory;
        $category = Category::where('categorie' , $request->categorie)->firstOrFail();

        $subcategory->name = $request->subcategorie;
        $subcategory->category = $category->id;
        
        $subcategory->save();
        return redirect()->back();
    }
}
