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
        return back()->with('succes', 'Category Berhasi Di tambahkan');
    }
}
