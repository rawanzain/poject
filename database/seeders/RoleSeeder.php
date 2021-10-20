<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Role::create([
            'name' =>'superadmin',
            'display_name' =>'super admin',
            'description'=>'can do anything'
        ]);

        $admin = Role::create([
            'name' =>'admin',
            'display_name' =>'admin',
            'description'=>'can do anything'
        ]);

        $manger = Role::create([
            'name' =>'manger',
            'display_name' =>'manger',
            'description'=>'manger'
        ]);


        $student = Role::create([
            'name' =>'student',
            'display_name' =>'student',
            'description'=>'student'
        ]);

        $driver = Role::create([
            'name' =>'driver',
            'display_name' =>'driver',
            'description'=>'driver'
        ]);












    }
}
