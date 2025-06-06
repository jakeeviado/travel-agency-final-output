<?php

namespace Database\Seeders;

use App\Models\tblPricings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblPricingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tblPricings::factory()->create();
    }
}
