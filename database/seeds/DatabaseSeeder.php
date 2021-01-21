<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(GendersTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(DivisionsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        

    }
}
