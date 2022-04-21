<?php

namespace Database\Seeders;

use App\Models\Recruiter;
use Illuminate\Database\Seeder;

class RecruiterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $recruiter = new Recruiter();
//        $recruiter->description = 'Lập Trình';
//        $recruiter->company_address = 'Hà Nội';
//        $recruiter->province_id = 1;
//        $recruiter->district_id = 1;
//        $recruiter->ward_id = 1;
//        $recruiter->office = 'Mon City';
//        $recruiter->employee = '20 - 30';
//        $recruiter->profile_image = 'cg92.jpeg';
//        $recruiter->banner_image = 'cg92.jpeg';
//        $recruiter->user_id = 5;
//        $recruiter->status_id = rand(1,2);
//        $recruiter->business_category_id = rand(1,4);
//        $recruiter->save();
//
//        $recruiter = new Recruiter();
//        $recruiter->description = 'Bán lẻ';
//        $recruiter->company_address = 'Hà Nội';
//        $recruiter->province_id = 1;
//        $recruiter->district_id = 1;
//        $recruiter->ward_id = 1;
//        $recruiter->office = 'Hà Đông';
//        $recruiter->employee = '20 - 30';
//        $recruiter->profile_image = 'cg53.jpeg';
//        $recruiter->banner_image = 'cg53.jpeg';
//        $recruiter->user_id = 6;
//        $recruiter->status_id = rand(1,2);
//        $recruiter->business_category_id = rand(1,4);
//        $recruiter->save();
//
//        $recruiter = new Recruiter();
//        $recruiter->description = 'Bán lẻ';
//        $recruiter->company_address = 'Hà Nội';
//        $recruiter->province_id = 1;
//        $recruiter->district_id = 1;
//        $recruiter->ward_id = 1;
//        $recruiter->office = 'Hà Đông';
//        $recruiter->employee = '20 - 30';
//        $recruiter->profile_image = 'cg53.jpeg';
//        $recruiter->banner_image = 'cg53.jpeg';
//        $recruiter->user_id = 7;
//        $recruiter->status_id = rand(1,2);
//        $recruiter->business_category_id = rand(1,4);
//        $recruiter->save();
        Recruiter::factory(5)->create();

    }
}
