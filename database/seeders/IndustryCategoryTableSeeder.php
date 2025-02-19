<?php

namespace Database\Seeders;

use App\Models\IndustryCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndustryCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $IndustryCategoryDetails = [
            [
                'id'                => 1,
                'name'              => 'Manufacturing', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'name'              => 'Retail & E-Commerce',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'name'              => 'Banking & Finance',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 4,
                'name'              => 'Travel & Tourism ',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 5,
                'name'              => 'Healthcare',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 6,
                'name'              => 'Information Technology',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
           
            
        ];

        IndustryCategory::insert($IndustryCategoryDetails);
    }
}
