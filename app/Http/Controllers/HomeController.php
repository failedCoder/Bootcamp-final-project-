<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index');
    } 

    public function showAddForm()
    {
        $categories = array('Narukvice','Ogrlice','Dekoracije','Naušnice','Ostalo');

        return view('backend.add',compact('categories'));
    }

    public function edit()
    {
        return view('backend.edit');
    }
    public function delete()
    {
        return view('backend.delete');
    }
}
