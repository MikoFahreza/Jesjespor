<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kursi>
 */
class kursiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_gerbong' => Gerbong::inRandomOrder()->first()->id_gerbong,
            'nama_kursi' => fake()->name(),
        ];
    }
}
