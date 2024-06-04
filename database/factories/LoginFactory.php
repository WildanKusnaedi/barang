<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LoginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'nama' => $this->faker->name,
            'password' => bcrypt('admin123'), // password
            'role' => 'admin',
            'last_login' => $this->faker->date($format='Y-m-d', $max= 'now'),
        ];
    }
}
