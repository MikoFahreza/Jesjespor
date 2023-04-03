<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class keretaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('kereta') -> insert([
            [
                'id_kereta' => 1,
                'total_kursi' => '50',
                'nama_kereta' => 'penataran',
                'jenis_kereta' => 'ekonomi',
            ],

            [
                'id_kereta' => 2,
                'total_kursi' => '45',
                'nama_kereta' => 'jayabaya',
                'jenis_kereta' => 'eksekutif',
            ]
            ]);
    }
}

