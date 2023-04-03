<?php

    namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {

    \App\Models\Admin::factory(20)->create();
    \App\Models\BoardingPass::factory(20)->create();
    \App\Models\Gerbong::factory(20)->create();
    \App\Models\Jadwal::factory(20)->create();
    \App\Models\Kereta::factory(20)->create();
    \App\Models\Kursi::factory(20)->create();
    \App\Models\MetodePembayaran::factory(20)->create();
    \App\Models\RutePerjalanan::factory(20)->create();
    \App\Models\Stasiun::factory(20)->create();
    \App\Models\Transaksi::factory(20)->create();
    \App\Models\UserKereta::factory(20)->create();

    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

  }
}