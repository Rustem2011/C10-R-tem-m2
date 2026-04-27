<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            \Database\Seeders\CategorySedeer::class,
            \Database\Seeders\RestaurantSedeer::class,
            \Database\Seeders\FoodSedeer::class,
        ]);
        \App\models\Food::factory(1000)->create();
    }
}
