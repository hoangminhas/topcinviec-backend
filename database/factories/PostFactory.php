<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'content' => $this->faker->text(),
            'salary' => rand(100, 1000),
            'job_type'=>$this->faker->randomElement(['Full-time', 'Part-time', 'Freelancer']),
            'job_level'=>$this->faker->randomElement(['Expert', 'Amateur', 'Medium']),
            'quantity'=> rand(10,30),
            'gender'=>$this->faker->randomElement(['Male', 'Female']),
            'experience'=>rand(1,5),
            'posting_start'=>$this->faker->date(),
            'posting_end'=>$this->faker->date(),
            'business_category_id'=>rand(1,4),
            'user_id'=>rand(5,7),
            'status_id'=>rand(1,2),
            'province_id'=>rand(1,63)
        ];
    }
}
