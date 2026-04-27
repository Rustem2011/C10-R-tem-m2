<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $appName = 'Rusik Restaurant';

        $foods = \App\Models\Food::inRandomOrder()->limit(12)->get();

        $categories = \App\Models\Category::inRandomOrder()->limit(4)->get();
        
        $restaurants = \App\Models\Restaurant::orderBy('rating', 'desc')->limit(8)->get();
        $categoryMap = \App\Models\Category::pluck('name', 'id')->toArray();
        return view('home.index', compact('appName', 'categories', 'foods', 'restaurants', 'categoryMap'));
    }
}
