<?php

namespace Database\Seeders;

use App\Models\tblDestinations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblDestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tblDestinations::factory()->create();
    }
}
