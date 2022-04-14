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
            'title' => $this->faker->text(),
            'content' => $this->faker->text(),
            'salary' => rand(100, 1000),
            'job_type'=>$this->faker->text(),
            'job_level'=>$this->faker->text(),
            'quantity'=> rand(10,100),
            'gender'=>$this->faker->text(),
            'experience'=>$this->faker->text(),
            'posting_start'=>$this->faker->date(),
            'posting_end'=>$this->faker->date(),
        ];
    }
}
