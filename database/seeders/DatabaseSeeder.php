<?php

namespace Database\Seeders;



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
<<<<<<< HEAD
        $this->call(PostSeeder::class);
=======
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
>>>>>>> 6b1f9beae8b2a9dd82b3357b137006204a71a90c
    }
}
