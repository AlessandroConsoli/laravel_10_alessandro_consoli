<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(ProductRequest $request){

        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $img = null;

        if ($request->file('img')) {
            $img = $request->file('img')->store('img', 'public');
        }


        Product::create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'img' => $img
        ]);
        return redirect(route('product.create'))->with('successMessage', 'Hai inserito il prodotto in stock!');
    }

            // *! altro metodo di salvataggio
        // $product = new Product();
        // $product->name = $name;
        // $product->description = $description;
        // $product->price = $price;
        // $product->save();


    public function index(){

        $products = Product::all();

        return view('product.index', ['products'=>$products]);
    }


    public function newProduct(){
        return view('product.create');
    }

}
