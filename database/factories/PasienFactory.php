<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dokter_id' => mt_rand(1,7),
            'kode_pasien' => fake()->numerify('###'),
            'nama_pasien' => fake()->name(),
            'birthday' => fake()->date(),
            'email' => fake()->email(),
            'alamat' => fake()->address(),
        ];
    }
}
