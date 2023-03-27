<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user') -> insert([
            [
                'id_user' => 1,
                'nama' => 'Basith',
                'jk' => 'L',
                'ttl' => 'Malang 05 Maret 1999',
                'username' => 'basithBahi@gmail.com',
                'password' => 'basith123',
            ],

            [
                'id_user' => 2,
                'nama' => 'Sabilar',
                'jk' => 'L',
                'ttl' => 'Malang 08 Juli 2003',
                'username' => 'sabilarR@gmail.com',
                'password' => 'sabilar123',
            ]
            ]);
    }
}
