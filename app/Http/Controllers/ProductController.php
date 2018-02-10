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
    	//dd($image->path);


    	session()->flash('message','Dodali ste novi proizvod!');

    	return redirect('/home');    
    }

    public function edit()
    {

    }

      
   
}
