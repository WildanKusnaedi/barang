<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PembelianBarangFactory extends Factory
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
            'ID' => $this->faker->unique()->numberBetween(1,10),
            'nomor_pembelian' => $this->faker->text($maxNbChars = 20),
            'tanggal' => $this->faker->date('Y-m-d'),
            'kode_barang' => $this->faker->unique->text($maxNbChars = 20),
            'satuan' => $this->faker->text($maxNbChars = 10),
            'qty' => $this->faker->numberBetween(1,100),
            'harga' => $this->faker->numberBetween(10000,900000),
            'diskon' => $this->faker->numberBetween(1, 100),
            'subtotal' => $this->faker->numberBetween(10000,900000),
        ];
    }
}
