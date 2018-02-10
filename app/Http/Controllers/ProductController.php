<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Http\Requests\AddProductRequest;

class ProductController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }

    public function add(AddProductRequest $request)
    {
    	$image = $request->file('image');
		$ext = $image->extension();
		$name = request('name').'.';
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


        /*$input = $request->all();

        $product->fill($input)->save();*/

        return redirect('/home');
    }

    public function delete(Product $product)
    {
        
    }

      
   
}
