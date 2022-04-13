<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new  User();
        $user->email = "admin@gmail.com";
        $user->password=  Hash::make(123123);
        $user->name = 'Admin';
        $user->phone = '0123456789';
        $user->address_detail = 'HN';
        $user->ward_id = 1;
        $user->role_id = 1;
        $user->save();

        $user = new  User();
        $user->email = "candidate@gmail.com";
        $user->password=  Hash::make(123123);
        $user->name = 'Candidate';
        $user->phone = '0123456789';
        $user->address_detail = 'HN';
        $user->ward_id = 1;
        $user->role_id = 2;
        $user->save();

        $user = new  User();
        $user->email = "recruiter@gmail.com";
        $user->password=  Hash::make(123123);
        $user->name = 'Recruiter';
        $user->phone = '0123456789';
        $user->address_detail = 'HN';
        $user->ward_id = 1;
        $user->role_id = 3;
        $user->save();

        User::factory(5)->create();
    }
}
