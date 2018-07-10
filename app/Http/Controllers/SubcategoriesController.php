<?php

namespace App\Http\Controllers;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    public function store(Request $request){
        $subcategory = new Subcategory;

        $subcategory->name = $request->subcategorie;
        $subcategory->save();
        return redirect()->back();
    }
}
