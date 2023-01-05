<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    public function index()
    {
        return Inertia::render('Product/Index',[
            'products' => Product::all(),
        ]); 
    }

    public function create()
    {
        return Inertia::render('Product/Create'); 
    }

    public function store(Product $product)
    {
        $data = Product::create([
            'name' => request()->name,
            'price' => request()->price
        ]);

        return redirect()->route('products.index');
    }  
    
    public function edit(Product $product)
    {
        return Inertia::render('Product/Edit',[
            'product' => $product,
        ]); 
    }    

    public function update(Request $request, Product $product)
    {
        $product->update([
            "name" => $request->name,
            "price" => $request->price
        ]);

        return redirect()->route('products.index');
    } 

    public function destroy(Product $product){
        
        $product->delete();

        return redirect()->route('products.index');
    }
}