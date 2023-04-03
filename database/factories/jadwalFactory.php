<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jadwal>
 */
class jadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_rute' => Rute::inRandomOrder()->first()->id_rute,
            'id_kereta' => Kereta::inRandomOrder()->first()->id_kereta,
            'id_admin' => Admin::inRandomOrder()->first()->id_admin,
            'tanggal'=> fake()->datetime(),
        ];
    }
}
