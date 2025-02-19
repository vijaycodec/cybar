<?php

namespace Database\Seeders;

use App\Models\CourseFeatureCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseFeatureCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $CourseFeatureCategoryDetails = [
            [
                'id'                => 1,
                'name'              => 'CyberSecurity',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'name'              => 'Ethical Hacking',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'name'              => 'Penetration testing',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 4,
                'name'              => 'Vulnerability Assessment',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 5,
                'name'              => 'Certification',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            
        ];
        CourseFeatureCategory::insert($CourseFeatureCategoryDetails);

    }
}
