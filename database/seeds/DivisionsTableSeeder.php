<?php

use Illuminate\Database\Seeder;
use App\Division;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::truncate();

        Division::create(['division_name' => 'Yangon']);
     
    }
}
