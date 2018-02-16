<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();

        return view('backend.index',compact('products'));
    } 

    public function editForm(Product $product)
    {
        return view('backend.edit',compact('product'));
    }

    public function showAddForm()
    {
        return view('backend.add');
    }

}
