<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      $job_title = $this->faker->sentence(rand(5,10));
      $datetime = $this->faker->dateTimeBetween('-1 month','now');
        return [
           'job_title'=>$job_title,
           'user_id'=>rand(1,50),
           'job_slug'=>Str::slug($job_title).'-'.rand(1111,9999),
           'job_vacancy'=>rand(1,30),
           'job_employment_status'=>fake()->randomElement(['Part Time', 'Full Time']),
           'job_experience'=>rand(1,10).' years',
           'job_gender'=>fake()->randomElement(['male', 'female']),
           'job_age'=>rand(25,50),
           'job_location'=>$this->faker->country,
           'job_salary'=>rand(25000,150000),
           'job_application_deadline'=>$this->faker->date,
           'job_summary'=>$this->faker->sentence(rand(15,30)),
           'job_responsibilities'=>$this->faker->sentence(rand(45,90)),
           'job_educational_requirements'=>$this->faker->sentence(rand(5,20)),
           'job_additional_requirements'=>$this->faker->sentence(rand(5,30)),
           'job_other_benefits'=>$this->faker->sentence(rand(5,20)),
           'is_featured'=>false,
           'is_active'=>true,
           'created_at'=>$datetime,
           'updated_at'=>$datetime,
        ];
    }
}
