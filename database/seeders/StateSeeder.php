<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\State;
use App\Models\City;

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
State::create([
    'name'=>'الخرطوم',
    ]);
    City::create([
        'state_id'=>1,
        'name'=>'الصحافة',
    ]);

           }
}
