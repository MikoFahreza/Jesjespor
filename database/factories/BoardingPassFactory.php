<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Factories\Transaksi;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\boarding_pass>
 */
class BoardingPassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice' => id_Boarding::inRandomOrder()->first()->invoice,
        ];
    }
}
