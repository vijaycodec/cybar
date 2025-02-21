<?php

namespace Database\Seeders;

use App\Models\L3Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PageDetailsTableSeeder::class);
        $this->call(SignificanceCategoryTableSeeder::class);
        $this->call(CourseCategoryTableSeeder::class);
        $this->call(CourseSubCategoryTableSeeder::class);
        $this->call(CourseFeatureCategoryTableSeeder::class);
        $this->call(CyberwindCategoryTableSeeder::class);
        $this->call(IndustryCategoryTableSeeder::class);
        $this->call(faqsCategoryTableSeeder::class);
        $this->call(BlogCategoryTableSeeder::class);
        $this->call(ProgramCategoryTableSeeder::class);
        $this->call(L3CategoryTableSeeder::class);
        $this->call(MenuBlogCategoryTableSeeder::class);

 
    }
}
