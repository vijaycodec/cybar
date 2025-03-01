<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $users = [
            [
                'id'                => 1,
                'category_type'     => 'resources',
                'name'              => 'Professional Services',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'category_type'     => 'resources',
                'name'              => 'Security Operations',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'category_type'     => 'resources',
                'name'              => 'Application Security',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 4,
                'category_type'     => 'resources',
                'name'              => 'Web Security',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 5,
                'category_type'     => 'resources',
                'name'              => 'VAPT',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 6,
                'category_type'     => 'resources',
                'name'              => 'Career',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            [
                'id'                => 7,
                'category_type'     => 'resources',
                'name'              => 'Data Science',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            // resources categories end here 
            // event categories start here
            [
                'id'                => 8,
                'category_type'     => 'event',
                'name'              => 'Professional Services',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 9,
                'category_type'     => 'event',
                'name'              => 'Security Operations',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 10,
                'category_type'     => 'event',
                'name'              => 'Application Security',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 11,
                'category_type'     => 'event',
                'name'              => 'Web Security',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 12,
                'category_type'     => 'event',
                'name'              => 'VAPT',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 13,
                'category_type'     => 'event',
                'name'              => 'Career',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            [
                'id'                => 14,
                'category_type'     => 'event',
                'name'              => 'Data Science',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            
           // event categories ends here
           // blog categories start here

            [
                'id'                => 15,
                'category_type'     => 'blog',
                'name'              => 'Professional Services',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 16,
                'category_type'     => 'blog',
                'name'              => 'Security Operations',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 17,
                'category_type'     => 'blog',
                'name'              => 'Application Security',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 18,
                'category_type'     => 'blog',
                'name'              => 'Web Security',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 19,
                'category_type'     => 'blog',
                'name'              => 'VAPT',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 20,
                'category_type'     => 'blog',
                'name'              => 'Career',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            [
                'id'                => 21,
                'category_type'     => 'blog',
                'name'              => 'Data Science',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            // blog categories ends here

            // Testimonialscategories start here

            [
                'id'                => 22,
                'category_type'     => 'testimonials',
                'name'              => 'Professional Services testo',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 23,
                'category_type'     => 'testimonials',
                'name'              => 'Security Operations testo',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 24,
                'category_type'     => 'testimonials',
                'name'              => 'Application Security testo',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 25,
                'category_type'     => 'testimonials',
                'name'              => 'Web Security testo',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 26,
                'category_type'     => 'testimonials',
                'name'              => 'VAPT testo',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 27,
                'category_type'     => 'testimonials testo',
                'name'              => 'Career',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            [
                'id'                => 28,
                'category_type'     => 'testimonials testo',
                'name'              => 'Data Science',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            // Testimonials categories ends here
        ];
            Category::insert($users);
    }
}
