<?php

namespace Database\Seeders;

use App\Models\BusinessCategory;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new BusinessCategory();
        $status->name = 'IT';
        $status->save();

        $status = new BusinessCategory();
        $status->name = 'MKT';
        $status->save();

        $status = new BusinessCategory();
        $status->name = 'Sale';
        $status->save();

        $status = new BusinessCategory();
        $status->name = 'Teachers';
        $status->save();
    }
}
