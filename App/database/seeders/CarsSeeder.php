<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cars::create([
            'Car_Name' => 'BMW',
            'Car_Color' => 'Blanch',
            'Reference' => 'BMW_1'
        ]);

        Cars::create([
            'Car_Name' => 'Mercedes',
            'Car_Color' => 'Blanch',
            'Reference' => 'Mercedes_2'
        ]);
    }
}
