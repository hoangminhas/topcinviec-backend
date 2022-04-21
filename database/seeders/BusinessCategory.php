<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status = new \App\Models\BusinessCategory();
        $status->name = 'IT';
        $status->save();

        $status = new \App\Models\BusinessCategory();
        $status->name = 'Marketing';
        $status->save();

        $status = new \App\Models\BusinessCategory();
        $status->name = 'Design';
        $status->save();

        $status = new \App\Models\BusinessCategory();
        $status->name = 'Writing';
        $status->save();
    }
}
