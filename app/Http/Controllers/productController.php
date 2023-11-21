<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add (Request $request){
        $c = Category::all();
        return view('pages.product.add', compact('c'));
    }

    public function store(){
    $attributes = request()->validate([
        'user_id' => 'required',
        'category_id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif', // Adjust allowed file types as needed
        'harga' => 'required',
        'diskon' => 'required',
        'stock' => 'required',
    ]);

    // Handle file upload
    if (request()->hasFile('photo')) {
        $attributes['photo'] = request()->file('photo')->store('product_images', 'public');
    }

    Category::create($attributes);

    return redirect('/product')->with('success', 'Berhasil menambahkan produk');
    }

    public function edit($id) {
        $p = product::find($id);
        return view();
    }
}
