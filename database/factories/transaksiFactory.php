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
            'id_jadwal' => Jadwal::inRandomOrder()->first()->id_jadwal,
            'id_user' => UserKereta::inRandomOrder()->first()->id_user,
            'id_metode_pembayaran' => MetodePembayaran::inRandomOrder()->first()->id_metode_pembayaran,
        ];
    }
}
