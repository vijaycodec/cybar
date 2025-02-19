<?php

namespace Database\Seeders;

use App\Models\L3Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class L3CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $l3CategoryDetails = [
            [
                'id'                => 1,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'Overview', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'Significance', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'Program', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 4,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'Course Features', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 5,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'CEH KIT', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 6,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'Incidents', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 7,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'Industries', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 8,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'Why Cyberwind', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 9,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'Testimonials', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 10,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => 'Blog', 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 11,
                'page_category_id'  => 1,
                'category_id'       => 1,
                'sub_category_id'   => 1,
                'l3_category'       => "Faq's", 
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            
        ];

        L3Category::insert($l3CategoryDetails);

    }
}
