<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();

        City::create(['city_name' => 'Yangon','zip_code' => 11181 ]);
        City::create(['city_name' => 'Mandalay', 'zip_code' => 05011 ]);
    }
}
