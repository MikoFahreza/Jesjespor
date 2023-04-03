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
            'total_kursi' => fake()->randomNumber(),
            'nama_kereta' => fake()->name(),
            'jenis_kereta' => fake()->randomElement(['eksekutif', 'bisnis', 'ekonomi', 'kargo']),
        ];
    }
}