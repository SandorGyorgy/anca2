<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
    public function store(Request $request){

        $category = new Category;

        $category->categorie = $request->categorie;
        $category->save();

        return redirect()->back();
    }

}
