<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class stasiunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('stasiun') -> insert([
            [
                'id_stasiun' => 1,
                'nama_stasiun' => 'Malang Kota Lama',
            ],

            [
                'id_stasiun' => 2,
                'nama_stasiun' => 'Gubeng',
            ]
            ]);
    }
}
