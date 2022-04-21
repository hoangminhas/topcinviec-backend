<?php

namespace Database\Seeders;



use App\Models\Business_categories;
use App\Models\Candidate;
use App\Models\Post;
use App\Models\Recruiter;
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
        $this->call(BusinessCategory::class);
        $this->call(StatusSeeder::class);
        $this->call(RecruiterSeeder::class);
        Post::factory(10)->create();
        $this->call(CandidateSeeder::class);

    }
}
