<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//models 

use App\Models\Restaurant;

// Helpers

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;


class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::truncate();

        for($i = 0; $i < 10 ; $i++){
            $restaurant = new Restaurant();
            $restaurant->name = fake()->word();
            $restaurant->slug = Str::slug($restaurant->name);
            $restaurant->address = fake()->address();
            $restaurant->iva = fake()->numberBetween(10000000000,99999999999);
            $restaurant->img = fake()->url();
            $restaurant->save();
        }; 
    }
}

