<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offers = config('offers');
        foreach ($offers as $offer) {
            $newTravel = new Travel(); 
            $newTravel->destination = $offer['destination'];
            $newTravel->region = $offer['region'];
            $newTravel->country = $offer['country'];
            $newTravel->nights = $offer['nights'];
            $newTravel->price = $offer['price'];
            $newTravel->rating = $offer['rating'];
            $newTravel->save();

        }
    }
}
