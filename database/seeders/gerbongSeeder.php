<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class gerbongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('gerbong') -> insert([
            [
                'id_gerbong' => 1,
                'nama_gerbong' => 'mbanking bca',
            ],

            [
                'id_metodePembayaran' => 2,
                'metodePembayaran' => 'mbanking bri',
            ]
            ]);
    }
}
