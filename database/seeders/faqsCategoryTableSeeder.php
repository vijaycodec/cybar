<?php

namespace Database\Seeders;

use App\Models\FaqCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class faqsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $FaqCategoryDetails = [
            [
                'id'                => 1,
                'name'              => 'C|EH v12 Program', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'name'              => 'C|EH Certification Questions',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'name'              => 'C|EH v12 Training',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 4,
                'name'              => 'C|EH v12 Accreditation',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            
        ];

        FaqCategory::insert($FaqCategoryDetails);
    }
}
