<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::truncate();

        State::create(['state_name' => 'Ayeyarwady Region']);
        State::create(['state_name' => 'Bago Region']);
        State::create(['state_name' => 'Chin State']);
        State::create(['state_name' => 'Kachin State']);
        State::create(['state_name' => 'Kayah State']);
        State::create(['state_name' => 'Kayin State']);
        State::create(['state_name' => 'Magway Region']);
        State::create(['state_name' => 'Mandalay Region']);
        State::create(['state_name' => 'Mon State']);
        State::create(['state_name' => 'Rakhine State']);
        State::create(['state_name' => 'Shan State']);
        State::create(['state_name' => 'Sagaing Region']);
        State::create(['state_name' => 'Tanintharyi Region']);
        State::create(['state_name' => 'Yangon Region']);
        State::create(['state_name' => 'Naypyidaw Union Territory']);
    }
}
