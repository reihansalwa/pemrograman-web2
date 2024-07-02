<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'nim' => 'D122311004',
            'nama' => 'Reihan Salwa Fadhila Irawan',
            'email' => 'salwaforster@gmail.com',
            'prodi' => 'AJ-RMIK',
        ]);
    }
}
