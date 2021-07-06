<?php

namespace Database\Factories;

use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organisation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'organisation_name' => $this->faker->company(),
            'organisation_id' => $this->faker->randomElement([123, 456, 879, 568]),
            'address' => $this->faker->address(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email,
            'one_month_plan' => rand(0,1),
            'three_month_plan' => rand(0,1),
            'six_month_plan' => rand(0,1),
            'twelve_month_plan' => rand(0,1),
        ];
    }
}
