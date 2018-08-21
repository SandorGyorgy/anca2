<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $categories = Category::all();
        $subcategory = Subcategory::all();

        return view('Store\DashBoardAdmin\adaugaProduse', ['categorii'=>$categories , 'subcategorii'=> $subcategory]);
    }

    public function store(Request $request){

       
        $category = Category::where('categorie', $request->categorie)->firstOrFail();
        $subcategorie = Subcategory::where('name' , $request->subcategorie)->firstOrFail();
       
        $product = new Product;
        $product->nume = $request->titlu;
        $product->descriere=$request->descriere;
        $product->pret=$request->pret;


        $imagine = $request->poza;
        $extention = 'jpg';
        $imageName = time().str_random().".".$extention;
        $destinationPath = public_path('imaginiProduse');
        $imagine->move($destinationPath , $imageName);
        $path = "http://anca2.test/imaginiProduse/".$imageName;

        $product->poza = $path;
         $product->categorie_id = $category->id;
         $product->subcategorie_id = $subcategorie->id;

         $product->save();

        return redirect()->back();
    }

    public function produse(){
        $produse = Product::all();
        return view('Store\DashBoardAdmin\listaProduse', ['produse'=>$produse]);
    }

    public function delete($id){
        
        $produs = Product::where('id' , $id)->first();
        $image = $produs->poza;
        $name = explode('http://anca2.test/imaginiProduse/' , $image);
        $path = public_path('imaginiProduse').'/'.$name[1];
        \File::delete($path);

        $produs->delete();

        return redirect()->back();
    }
}
