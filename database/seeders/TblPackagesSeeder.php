<?php

namespace Database\Seeders;

use App\Models\tblPackages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tblPackages::factory()->create();
    }
}
