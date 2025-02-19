<?php

namespace Database\Seeders;

use App\Models\ProgramCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programCategoryDetails = [
            [
                'id'                => 1,
                'name'              => 'COURSE OUTLINE', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'name'              => "WHAT'S NEW IN CEH",
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'name'              => 'WHO IS IT FOR',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 4,
                'name'              => 'BROCHURE',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            
        ];

        ProgramCategory::insert($programCategoryDetails);
    }
}
