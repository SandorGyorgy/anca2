<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
    public function store(Request $request){

        $category = new Category;

        $category->categorie = $request->categorie;
        $category->save();

        return redirect()->back();
    }

    public function show($category){
        $categorii = Category::all();
        $cat = Category::where('categorie' , $category)->first();
        $subCats = Subcategory::where('category' , $cat->id)->get();

        return view('Store\StoreInterface\PaginaCategorii', ['subcategorii'=>$subCats , 'categorii'=>$categorii]);


    }

}
