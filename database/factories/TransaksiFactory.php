<?php

namespace Database\Factories;

use Database\Seeders\jadwalSeeder;
use App\Models\metode_pembayaran;
use App\Models\jadwal;
use App\Models\user;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_jadwal' => Transaksi::inRandomOrder()->first()->invoice,
            'id_metode_pembayaran' => invoice::inRandomOrder()->first()->invoice,
            'id_user' => invoice::inRandomOrder()->first()->invoice,
        ];
    }
}
