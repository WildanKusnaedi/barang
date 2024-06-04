<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MasterBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Kode_Barang' => $this->faker->unique()->text($maxNbChars = 10),
            'nama_barang' => $this->faker->text($maxNbChars = 20),
            'satuan' => $this->faker->text($maxNbChars = 10),
            'qty' => $this->faker->numberBetween(1,100),
            'harga' => $this->faker->numberBetween(10000,900000),
        ];
    }
}
