<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
    public function store(Request $request){

        $category = new Category;

        $category->categorie = $request->categorie;
        $category->save();

        return redirect()->back();
    }

    public function show($category , $subcategory= NULL){

        $product = [];
        $categorii = Category::all();
        $cat = Category::where('categorie' , $category)->first();
        $subCats = Subcategory::where('category_id' , $cat->id)->get();
         
            if(count($subCats) > 0){
                if(!$subcategory){
                    $product = Product::where('categorie_id', $cat->id)->where('subcategorie_id' , $subCats{0}['id'])->get();
                }else{
                $currentSubcat = Subcategory::where('name' , $subcategory)->first();
                
                $product = Product::where('categorie_id', $cat->id)->where('subcategorie_id' , $currentSubcat->id)->get();


            }
        }
        return view('Store\StoreInterface\PaginaCategorii', ['subcategorii'=>$subCats , 'categorii'=>$categorii , 'produse'=>$product ,'categorie'=>$cat]);
        // $currentSubcat = Subcategory::where('name' , $subcategory)->get();
        // return response()->json(['subcategorii'=>$currentSubcat , 'categorii'=>$category ,'categorie curenta'=>$cat]);


    }

}
