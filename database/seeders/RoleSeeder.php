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
       $role = new Role();
       $role->name = 'admin';
       $role->save();


        $role = new Role();
        $role->name = 'candidate';
        $role->save();


        $role = new Role();
        $role->name = 'recruiter';
        $role->save();
    }
}
