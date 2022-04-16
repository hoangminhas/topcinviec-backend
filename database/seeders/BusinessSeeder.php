<?php

namespace Database\Seeders;

use App\Models\Business_categories;
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
        $status = new Business_categories();
        $status->name = 'IT';
        $status->save();

        $status = new Business_categories();
        $status->name = 'MKT';
        $status->save();

        $status = new Business_categories();
        $status->name = 'Sale';
        $status->save();

        $status = new Business_categories();
        $status->name = 'Teachers';
        $status->save();
    }
}
