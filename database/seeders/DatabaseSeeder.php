<?php

namespace Database\Seeders;



use App\Models\Business_categories;
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
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(BusinessSeeder::class);
        $this->call(PostSeeder::class)
        $this->call(RecruiterSeeder::class);

    }
}
