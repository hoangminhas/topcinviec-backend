<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'PHP Developer';
        $post->content = 'We are looking for a PHP Developer responsible for managing back-end services';
        $post->salary = 10000;
        $post->job_type = 'Full time';
        $post->job_level = 'Senior';
        $post->quantity = 2;
        $post->gender = 'all';
        $post->province_id = 1;
        $post->experience = '2 years';
        $post->posting_start = '2022/4/4';
        $post->posting_end = '2022/5/1';
        $post->business_category_id = 1;
        $post->user_id = 1;
        $post->save();

        $post = new Post();
        $post->title = 'Acouting';
        $post->content = 'We are looking for a Acouting responsible for managing our services and the interchange of data between the server and the users.';
        $post->salary = 10000;
        $post->job_type = 'Part time';
        $post->job_level = 'Master';
        $post->quantity = 2;
        $post->gender = 'all';
        $post->province_id = 1;
        $post->experience = '2 years';
        $post->posting_start = '2022/4/4';
        $post->posting_end = '2022/5/1';
        $post->business_category_id = 2;
        $post->user_id = 1;
        $post->save();
    }
}
