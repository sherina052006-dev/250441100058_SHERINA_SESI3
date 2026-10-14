<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nama = fake()->unique()->words(2,true);

        return [
            'kode'=> fake()->unique()->randomElement([
                'mb',
                'mt',
            ]),

            'nama' => fake()->randomElement([
                'mobil',
                'motor',
            ]),
        ];
    }
}
