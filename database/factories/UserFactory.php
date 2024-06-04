<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

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
