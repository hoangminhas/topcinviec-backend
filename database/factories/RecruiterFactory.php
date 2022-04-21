<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecruiterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'company_name' => $this->faker->name(),
            'description'=> $this->faker->text(),
            'company_address'=> $this->faker->address(),
            'province_id'=> rand(1, 10),
            'district_id'=> rand(1, 10),
            'ward_id'=> rand(1, 10),
            'office'=> $this->faker->streetName(),
            'employee'=> rand(10,100),
            'profile_image'=> 'cg92.jpeg',
            'banner_image'=> 'cg92.jpeg',
            'user_id'=> rand(2,3),
            'status_id'=> rand(1,2),
            'business_category_id'=>rand(1,4)
        ];
    }
}
