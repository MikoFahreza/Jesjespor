<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        'id_admin' => 1,
        'nama' => 'AdminSatu',
        'jk' => 'L',
        'ttl' => 'Malang 05 Mei 2000',
        'username' => 'adminSatu@gmail.com',
        'password' => 'admin123'
    }
}
