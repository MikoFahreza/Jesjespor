<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('admin') -> insert(
            [
                'id_admin' => 1,
                'nama' => 'AdminSatu',
                'jk' => 'L',
                'ttl' => 'Malang 05 Mei 2000',
                'username' => 'adminSatu@gmail.com',
                'password' => 'admin123'
            ]);
    }
}
