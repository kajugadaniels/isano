<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mrn' => $this->faker->unique()->randomNumber(6),
            'name' => $this->faker->name,
            'dob' => $this->faker->date,
            'age' => $this->faker->numberBetween(18, 80),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'marital_status' => $this->faker->randomElement(['Married', 'Single', 'Divorced', 'Widow', 'Widower']),
            'nationality' => 'Rwanda',
            'id_number' => $this->faker->unique()->randomNumber(8),
            'province' => $this->faker->state,
            'district' => $this->faker->city,
            'sector' => $this->faker->streetName,
            'cell' => $this->faker->secondaryAddress,
            'village' => $this->faker->streetName,
            'mobile_number' => $this->faker->phoneNumber,
            'relative_name' => $this->faker->name,
            'relative_id_number' => $this->faker->unique()->randomNumber(8),
            'relationship' => $this->faker->randomElement(['Partner', 'Child', 'Parent', 'Friend']),
            'relative_province' => $this->faker->state,
            'relative_district' => $this->faker->city,
            'relative_sector' => $this->faker->streetName,
            'relative_cell' => $this->faker->secondaryAddress,
            'relative_village' => $this->faker->streetName,
            'relative_mobile_number' => $this->faker->phoneNumber,
        ];
    }
}
