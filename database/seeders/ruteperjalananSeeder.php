<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ruteperjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('rute_perjalanan') -> insert([
            [
                'id_rute' => 1,
                'id_stasiun' => '1',
            ],

            [
                'id_rute' => 2,
                'id_stasiun' => '2',
            ]
            ]);
    }
}
