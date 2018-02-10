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
        $categories = 
        [
            'Narukvice',
            'Naušnice',
            'Ogrlice',
            'Dekoracije',
            'Ostalo',
        ]; 

        return view('backend.edit',compact('product','categories'));
    }

    public function showAddForm()
    {
        
        $categories = 
        [
            'Narukvice',
            'Naušnice',
            'Ogrlice',
            'Dekoracije',
            'Ostalo',
        ]; 
        return view('backend.add',compact('categories'));
    }

}
