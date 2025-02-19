<?php

namespace Database\Seeders;

use App\Models\SignificanceCategory;
use App\Models\SignificanceCatgory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SignificanceCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SignificanceCategoryDetails = [
            [
                'id'                => 1,
                'name'              => 'banking & finance',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'name'              => 'Critical Infrastructure',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'name'              => 'Application Software',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 4,
                'name'              => 'Health Care',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 5,
                'name'              => 'Goverment,Psu & Defence Line',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            
        ];
        SignificanceCategory::insert($SignificanceCategoryDetails);
    }
}
