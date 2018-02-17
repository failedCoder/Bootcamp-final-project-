<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Http\Requests\AddProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(6);
    	return view('frontend.index',compact('products'));
    }

    public function add(AddProductRequest $request)
    {
    	$image = $request->file('image');
		$ext = $image->extension();
		$rawName = request('name').'.';
        $name = str_replace(' ', '', $rawName);
		$path=$image->storeAs('products',$name.$ext);




    	Product::create([
    		'name' => request('name'),
    		'price' => request('price'),
    		'description' => request('description'),
    		'category' => request('category'),
    		'image' => $path,
    	]);
    	


    	session()->flash('message','Dodali ste novi proizvod!');

    	return redirect('/home');    
    }

    public function edit(AddProductRequest $request,Product $product)
    {
        $product->name = request('name');
        $product->price = request('price');
        $product->description = request('description');
        $product->category = request('category');

        \Storage::Delete($product->image);

        $image = $request->file('image');
        $ext = $image->extension();
        $name = request('name').'.';
        $path=$image->storeAs('products',$name.$ext);

        $product->image = $path;

        $product->save();

        session()->flash('message','Uredili ste proizvod!');

        return redirect('/home');
    }

    public function delete(Product $product)
    {
        
       
       \Storage::Delete($product->image);

       $product->delete();

       session()->flash('message','Obrisali ste proizvod!');

       return redirect('/home');
    }

    public function show(Product $product)
    {
        return view('frontend.details',compact('product'));
    }

    public function sort($category)
    {   
       $products =  Product::where('category','=',$category)->latest()->paginate(6);
       
       return view('frontend.index',compact('products')); 
    }

      
   
}
