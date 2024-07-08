<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'name' => 'Maria',
            'age' => 10,
            'address' => 'Rua da Figueira',
            'responsible' => 'Mãe: Livia',
            'class' => '5º ano',
            'paid' => true,
        ]);
    }
}
