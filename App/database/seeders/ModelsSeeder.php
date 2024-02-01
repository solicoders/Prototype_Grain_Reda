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
            'Model_Name' => 'iX',
            'Model_Year' => '2023',
            'cars_id' => '1',
            'Reference' => 'iX_2023',
        ]);
        Models::create([
            'Model_Name' => 'X7',
            'Model_Year' => '2022',
            'cars_id' => '1',
            'Reference' => 'X7_2022',
        ]);
        Models::create([
            'Model_Name' => 'X4 M',
            'Model_Year' => '2022',
            'cars_id' => '1',
            'Reference' => 'X4M_2022',
        ]);
        Models::create([
            'Model_Name' => 'GLE',
            'Model_Year' => '2021',
            'cars_id' => '2',
            'Reference' => 'GLE_2021',
        ]);
    }
}
