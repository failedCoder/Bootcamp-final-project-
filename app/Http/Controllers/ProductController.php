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
    	Product::create([
    		'name' => request('name'),
    		'price' => request('price'),
    		'description' => request('description'),
    		'category' => request('category'),
    	]);

    	session()->flash('message','Dodali ste novi proizvod!');

    	return back();
    }
    //poruke ako ne prođe validajciu!!
    //dodavanje slike
}
