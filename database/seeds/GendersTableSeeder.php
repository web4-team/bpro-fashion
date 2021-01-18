<?php

use Illuminate\Database\Seeder;
use App\Gender;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::truncate();

        Gender::create(['gender_name' => 'Male']);
        Gender::create(['gender_name' => 'Female']);
    }
}
