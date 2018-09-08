<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $categories = Category::with('subcategory')->get();
        

        return view('Store\DashBoardAdmin\adaugaProduse', ['categorii'=>$categories]);
       
    }

    public function store(Request $request){

        $test = explode(' -- ' , $request->subcategorie);
    
       $subcategorie = Subcategory::where('name' , $test[1])->firstOrFail();
       $categorie = Category::where('categorie' , $test[0])->firstOrFail();
       
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

        
         $product->subcategorie_id = $subcategorie->id;
         $product->categorie_id = $categorie->id;

         $product->save();

        return redirect()->back();
    }



    public function produse(){
        $produse = Product::all();
        $category = Category::all();
        return view('Store\DashBoardAdmin\listaProduse', ['produse'=>$produse ,'categorii'=>$category]);
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



    public function show($id){

            $edit = Product::where('id', $id)->firstOrFail();
            return view('Store\DashBoardAdmin\editeazaProdus', ['produs'=>$edit]);

    }



    public function edit(Request $request){
        $product = Product::where('id' , $request->id)->firstOrFail();

        $product->nume = $request->titlu;
        $product->descriere = $request->descriere;
        $product->pret = $request->pret;

        if($request->poza){
            $image = $product->poza;
            $name = explode('http://anca2.test/imaginiProduse/' , $image);
            $path = public_path('imaginiProduse').'/'.$name[1];
            \File::delete($path);

            $imagine = $request->poza;
            $extention = 'jpg';
            $imageName = time().str_random().".".$extention;
            $destinationPath = public_path('imaginiProduse');
            $imagine->move($destinationPath , $imageName);
            $newPath = "http://anca2.test/imaginiProduse/".$imageName;
            $product->poza = $newPath;
        }
        
        $product->save();


        return redirect()->back();
        
    }
}
