<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add() {
        return view('pages.category.add');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'category' => ['min:3'],
            'desc_category' => ['max:100'],
        ]);

        Category::create([
            'category' => $request->get('category'),
            'desc_category' => $request->get('desc_category')
        ]);
        return redirect()->route('category-index')->with('succes', 'Category Berhasi Di tambahkan');
    }

    public function detail($id){
        $c = Category::find($id);
        return view('pages.category.detail', compact('c'));
    }

    public function edit($id){
        $c = Category::find($id);
        return view('pages.category.edit', compact('c'));
    }

    public function update($id, Request $request) {
        $attributes = $request->validate([
            'category' => ['min:3'],
            'desc_category' => ['max:100'],
        ]);

        $category = Category::find($id);
        $category->update($attributes);
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category-index')->with('succes', 'Berhasil Menghapus Category');
    }
}
