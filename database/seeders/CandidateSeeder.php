<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $education = ['Graduated', 'High school', 'Secondary school', 'Else'];
        $skills = ['Marketing Online', 'Software Engineer', 'Business Analyst'];

        DB::table('candidates')->insert([
            'experience' => rand(1,3),
            'education' => $education[array_rand($education)],
            'skills' => $skills[array_rand($skills)],
            'resume' => '#',
            'profile_image' => 'photo.jpg',
            'user_id' => 2
        ]);

        DB::table('candidates')->insert([
            'experience' => rand(1,3),
            'education' => $education[array_rand($education)],
            'skills' => $skills[array_rand($skills)],
            'resume' => '#',
            'profile_image' => 'photo.jpg',
            'user_id' => 3
        ]);

        DB::table('candidates')->insert([
            'experience' => rand(1,3),
            'education' => $education[array_rand($education)],
            'skills' => $skills[array_rand($skills)],
            'resume' => '#',
            'profile_image' => 'photo.jpg',
            'user_id' => 4
        ]);

//        $candidate = new Candidate();
//        $candidate->experience = rand(1,3);
//        $candidate->education = array_rand(['Graduated', 'High school', 'Secondary school', 'Else']);
//        $candidate->skills = array_rand(['Marketing Online', 'Software Engineer', 'Business Analyst']);
//        $candidate->resume = '#';
//        $candidate->profile_image = 'photo.jpg';
//        $candidate->user_id = 2;
//        $candidate->save();
//
//        $candidate = new Candidate();
//        $candidate->experience = rand(1,3);
//        $candidate->education = array_rand(['Graduated', 'High school', 'Secondary school', 'Else']);
//        $candidate->skills = array_rand(['Marketing Online', 'Software Engineer', 'Business Analyst']);
//        $candidate->resume = '#';
//        $candidate->profile_image = 'photo.jpg';
//        $candidate->user_id = 3;
//        $candidate->save();
//
//        $candidate = new Candidate();
//        $candidate->experience = rand(1,3);
//        $candidate->education = array_rand(['Graduated', 'High school', 'Secondary school', 'Else']);
//        $candidate->skills = array_rand(['Marketing Online', 'Software Engineer', 'Business Analyst']);
//        $candidate->resume = '#';
//        $candidate->profile_image = 'photo.jpg';
//        $candidate->user_id = 4;
//        $candidate->save();
    }
}
