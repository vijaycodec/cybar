<?php

namespace Database\Seeders;

use App\Models\PageDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pageDetails = [
            [
                'id'                => 1,
                'page_name'         => 'Our Services',
                'table_name'        => 'our_services',
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'page_name'         => 'Corporate Training',
                'table_name'        => 'corporate_trainings',
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'page_name'         => 'Resources',
                'table_name'        => 'resources',
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 4,
                'page_name'         => 'Blogs',
                'table_name'        => 'blogs',
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 5,
                'page_name'         => 'Event',
                'table_name'        => 'events',
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 6,
                'page_name'         => 'Testimonial',
                'table_name'        => 'testimonials',
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            [
                'id'                => 7,
                'page_name'         => 'Careers',
                'table_name'        => 'careers',
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 8,
                'page_name'         => 'Contact Us',
                'table_name'        => 'conntact_us',
                'status'            => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            
        ];
        PageDetail::insert($pageDetails);
    }

}
