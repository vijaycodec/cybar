<?php

namespace Database\Seeders;

use App\Models\CyberwindCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CyberwindCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $CyberwindCategoryDetails = [
            [
                'id'                => 1,
                'name'              => ' Industry Challenges',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'name'              => 'Technological Challenges',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'name'              => 'Operational Challenges',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 4,
                'name'              => 'Working Autonomy ',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 5,
                'name'              => 'Digital Reflection',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 6,
                'name'              => 'Information Technology',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 7,
                'name'              => 'Cyber Security',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 8,
                'name'              => 'Network Security',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            
        ];
        CyberwindCategory::insert($CyberwindCategoryDetails);
    }
}
