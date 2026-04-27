<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ["name" => "Gyzgyn naharlar"],
            ["name" => "Çorbalar"],
            ["name" => "Gyzgyçly işdaaçarlar"],
            ["name" => "Sowuk işdaaçarlar"],
            ["name" => "Gök önümli salatlar"],
            ["name" => "Işda açarly salatlar"],
            ["name" => "Hamyrly naharlar"],
            ["name" => "Mangal we grill"],
            ["name" => "Dengiz önümleri"],
            ["name" => "Fast-fud"],
            ["name" => "Garnirler"],
            ["name" => "Süytli naharlar"],
            ["name" => "Süyjüler we desertler"],
            ["name" => "Nan önümler"],
            ["name" => "Suwlar we içgiler"],

        ];


    foreach ($categories as $category) {
        Category::create([
        "name"=> $category["name"],
        ]);
    }
    }
}
