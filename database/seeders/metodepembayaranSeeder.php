<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class metodepembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('metode_pembayaran') -> insert([
            [
                'id_metodePembayaran' => 1,
                'metodePembayaran' => 'mbanking bca',
            ],

            [
                'id_metodePembayaran' => 2,
                'metodePembayaran' => 'mbanking bri',
            ]
            ]);
    }
}
