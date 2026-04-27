<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function restaurant() {
        $appName = "Rusik Restaurnt";
        $categories = \App\Models\Category::all();
        $restaurants = \App\Models\Restaurant::all();
        $foods = \App\Models\Food::inRandomOrder()->limit(12)->get();
    return view('home.index', compact('appName', 'categories', 'foods', 'restaurants'));
    }
}
