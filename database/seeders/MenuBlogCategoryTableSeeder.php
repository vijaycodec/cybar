<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuBlogCategory;

class MenuBlogCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'                => 1,
                'name'              => 'Professional Services',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'name'              => 'Security Operations',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'name'              => 'Application Security',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

            [
                'id'                => 4,
                'name'              => 'Web Security',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 5,
                'name'              => 'VAPT',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 6,
                'name'              => 'Career',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
           
            [
                'id'                => 7,
                'name'              => 'Data Science',
                'title'             => 'The most effective learning system. World’s highest course completion rate.',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            
            
        ];
        MenuBlogCategory::insert($users);
    }
}
