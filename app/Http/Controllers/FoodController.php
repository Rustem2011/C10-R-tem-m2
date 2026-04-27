<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function food(): View {
        $categoryMap = \App\Models\Category::pluck('name', 'id')->toArray();
        $foods = Food::all();
        return view('foods.index', compact('foods', 'categoryMap'));
    }
    
    public function foodShow($id): View

    {
        $food = Food::findOrFail($id);
        $category = \App\Models\Category::find($food->category_id);
        $restaurant = \App\Models\Restaurant::find($food->restaurant_id);
        return view('foods.show', compact('food', 'category', 'restaurant',));
    }
}
