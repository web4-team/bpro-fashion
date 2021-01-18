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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
          DB::table('students')->insert([

            'name' => Str::random(10),
           
            'age' => Str::random(10),
            'phone' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => Str::random(10),
            'education' => Str::random(10),
            'objective' => Str::random(10),
            
            
            
        ]);
    }
}
