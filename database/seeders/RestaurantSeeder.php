<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'AlpEt SteakHouse',
                'address' => 'Ashgabat',
                'rating' => 4.8,
                'phone_number' => 12951951,
            ],
            [
                'name' => 'Soltan Restoran',
                'address' => 'Ashgabat',
                "rating" => 4.7,
                'phone_number' => 12468444
            ],
            [
                'name' => 'Altyn ada',
                'address' => 'Ashgabat',
                "rating" => 4.6,
                'phone_number' => 12363435,
            ],
            [
                'name' => 'Erzurum Restaurant',
                'address' => 'Ashgabat',
                "rating" => 4.6,
                'phone_number' => 12938000,
            ],
            [
                'name' => 'Sim Sim',
                'address' => 'Ashgabat',
                'rating' => 4.5,
                'phone_number' => 12361236,
            ],
            [
                'name' => 'Joshgun Palow House',
                'address' => 'Ashgabat',
                'rating' => 4.5,
                'phone_number' => 12232474,
            ],
            [
                'name' => 'Salam Restaurant',
                'address' => 'Ashgabat',
                'rating' => 4.4,
                'phone_number' => 12433335,
            ],
            [
                'name' => 'Turkana Restoran',
                'address' => 'Ashgabat',
                'rating' => 4.2,
                'phone_number' => 12210214,
            ],
            [
                'name' => 'Eophoria',
                'address' => 'Ashgabat',
                'rating' => 4.1,
                'phone_number' => 12754422,
            ],
            [
                'name' => 'Zip 90 (Balyk Tagamlary)',
                'address' => 'Ashgabat',
                'rating' => 3.9,
                'phone_number' => 12344433,
            ]

        ];

        foreach ($restaurants as $restaurant) {
            Restaurant::create(
            [
                'name' => $restaurant['name'],
                'address' => $restaurant['address'],
                'rating' => $restaurant['rating'],
                'phone_number' => $restaurant['phone_number'],
            ]);
        }
    }
}
