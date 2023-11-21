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

    public function store()
{
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

public function update($id)
{
    $category = Category::findOrFail($id);

    $attributes = request()->validate([
        'user_id' => 'required',
        'category_id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Allowing nullable for optional update
        'harga' => 'required',
        'diskon' => 'required',
        'stock' => 'required',
    ]);

    // If a new file is uploaded, delete the old one and store the new one
    if (request()->hasFile('photo')) {
        Storage::disk('public')->delete($category->photo); // Delete the old file

        $attributes['photo'] = request()->file('photo')->store('product_images', 'public');
    }

    $category->update($attributes);

    return redirect('/product')->with('success', 'Berhasil memperbarui produk');
}
}
