<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Food;
use Illuminate\Http\Category;
use Illuminate\Http\View;

class CategoryController extends Controller
{
    public function category() {
        $categories = Category::withCount('foods')->get();

        return view('category.index', compact('categories'));
    }
    public function categoryShow($id): View {
        $category = Category::withCount('foods')->findOrFail($id);
        $foods = $category->foods;
        return view('categories.show', compact('category', 'foods'));
    }
}
