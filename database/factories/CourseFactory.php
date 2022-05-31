<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->randomElement(["CC104", "DC194","ERD145","INSTI2","MAIN100"]),
            'course_no' => $this->faker->numberBetween($min = 1000, $max = 2000),
            'description' => $this->faker->text($maxNbChars = 50),
            'instructor' => $this->faker->lastName,
            'room' => $this->faker->randomElement(["Rm: 120","Rm: 125","Rm: 148","Rm: 134","Rm: 186","Rm: 112",]),

        ];
    }
}
