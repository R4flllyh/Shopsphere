<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add (Request $request){
        return view('pages.product.add');
    }
}
