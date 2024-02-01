<?php

namespace Database\Seeders;

use App\Models\Models;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Models::create([
            'Model_Name' => 'GLE',
            'Model_Year' => '2023',
            'Reference' => 'GLE_2023',
        ]);
        Models::create([
            'Model_Name' => 'i7',
            'Model_Year' => '2022',
            'Reference' => 'i7_2022',
        ]);
    }
}
