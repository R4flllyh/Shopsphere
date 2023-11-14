<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add (Request $request){
        $c = Category::all();
        return view('pages.product.add', compact('c'));
    }

    public function store (){
        $attribute = request()->validate([
            'user_id' => 'required',
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required|mimes',
            'harga' => 'required',
            'diskon' => 'required',
            'stock' => 'required',
        ]);

        Category::create($attribute);
        return redirect('/product')->with('succes', 'Berhasil menambahkan produk');
    }
}
