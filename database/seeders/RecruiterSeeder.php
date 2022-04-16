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
        $recruiter = new  Recruiter();
        $recruiter->company_name = 'CodeGym';
        $recruiter->description = 'Lập Trình';
        $recruiter->company_address = 'Hà Nội';
        $recruiter->office = 'Mon City';
        $recruiter->employee = '20 - 30';
        $recruiter->profile_image = 'Unititle';
        $recruiter->banner_image = 'Unititle1';
        $recruiter->user_id = 3;
        $recruiter->status_id = 1;
        $recruiter->business_category_id = 1;
        $recruiter->save();

        $recruiter = new  Recruiter();
        $recruiter->company_name = 'Lotus';
        $recruiter->description = 'Bán lẻ';
        $recruiter->company_address = 'Hà Nội';
        $recruiter->office = 'Hà Đông';
        $recruiter->employee = '20 - 30';
        $recruiter->profile_image = 'Unititle';
        $recruiter->banner_image = 'Unititle1';
        $recruiter->user_id = 3;
        $recruiter->status_id = 1;
        $recruiter->business_category_id = 1;
        $recruiter->save();


    }
}
