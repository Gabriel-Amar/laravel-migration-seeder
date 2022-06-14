<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $newTravel = new Travel();
            $newTravel->title = $faker->state();
            $newTravel->city = $faker->city();
            $newTravel->country = $faker->country();
            $newTravel->price = $faker->randomFloat(2, 100, 1000);
            $newTravel->image = $faker->imageUrl(360, 360, 'city', true);
            $newTravel->description = $faker->sentence();

            $newTravel->save();
        }
    }
}
