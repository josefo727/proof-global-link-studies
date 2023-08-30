<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    const NEW_CONSTANT = 'Y-m-d';

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
		$date = Carbon::createFromFormat('Y-m-d', '1980-01-01')
			->addDays(rand(0, 9000))
			->format('Y-m-d');

        return [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail,
            'date_of_birth' => $date,
        ];
    }
}
