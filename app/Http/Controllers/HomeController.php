<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view ("index");
        
    }
    
    public function about ()
    {
        return redirect() -> route('about');
    }
    public function products ()
    {
        return redirect() -> route('products');
    }
    public function store ()
    {
        return redirect() -> route('store');
    }
}
