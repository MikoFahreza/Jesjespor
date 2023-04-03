<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class jadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('jadwal') -> insert([
            [
                'id_jadwal' => 1,
                'id_rute' => 1,
                'id_kereta' => 1,
                'id_admin' => 1,
            ],

            [
                'id_jadwal' => 2,
                'id_rute' => 2,
                'id_kereta' => 2,
                'id_admin' => 2,
            ]
            ]);
    }
}
