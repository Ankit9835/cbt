<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'p_id' => $this->faker->randomElement([123, 456, 879, 568]),
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'email' => $this->faker->unique()->email,
            'organisation_id' => $this->faker->randomElement([1, 2, 3, 4]),
            'therapist_id' => $this->faker->randomElement([1, 2, 3, 4]),
            'plain' => $this->faker->randomElement(['1-month', '2-month', '3-month']),
            'start_date' => $this->faker->randomElement(['07-07-2020', '08-07-2021', '09-07-2019']),
            'renew' => $this->faker->randomElement([1, 0]),
        ];
    }
}
