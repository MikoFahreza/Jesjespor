<?php

namespace Database\Factories;
use App\Models\Jadwal;
use App\Models\MetodePembayaran;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penjualan>
 */
class PenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_jadwal' => Jadwal::inRandomOrder()->first()->id_jadwal,
            'id_user' => UserKereta::inRandomOrder()->first()->id_user,
            'id_metode_pembayaran' => MetodePembayaran::inRandomOrder()->first()->id_metode_pembayaran,
        ];
    }
}