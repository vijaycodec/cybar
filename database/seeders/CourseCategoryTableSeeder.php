<?php

namespace Database\Seeders;

use App\Models\CourseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $CourseCategoryDetails = [
            [
                'id'                => 1,
                'page_category'     => 1,
                'name'              => 'Security Assessment Testing',
                'title'             => 'Security Assessment Testing',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 2,
                'page_category'     => 1,
                'name'              => 'Security Consulting and Advisory',
                'title'             => 'Security Consulting and Advisory',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 3,
                'page_category'     => 1,
                'name'              => 'Security Governance and Compliance',
                'title'             => 'Security Governance and Compliance',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 4,
                'page_category'     => 1,
                'name'              => 'Software Testing',
                'title'             => 'Software Testing',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 5,
                'page_category'     => 1,
                'name'              => 'Application Accessibility Testing',
                'title'             => 'Application Accessibility Testing',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 6,
                'page_category'     => 1,
                'name'              => 'Specialized Services',
                'title'             => 'Specialized Services',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 7,
                'page_category'     => 1,
                'name'              => 'Managed Security Services',
                'title'             => 'Managed Security Services',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 8,
                'page_category'     => 1,
                'name'              => 'SOC as a Service',
                'title'             => 'SOC as a Service',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 9,
                'page_category'     => 1,
                'name'              => 'Next Generation Information Security Solutions',
                'title'             => 'Next Generation Information Security Solutions',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 10,
                'page_category'     => 2,
                'name'              => 'EC Council Accredited Certification Programs',
                'title'             => 'EC Council Accredited Certification Programs',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 11,
                'page_category'     => 2,
                'name'              => 'PECB Accredited Certification Programs',
                'title'             => 'PECB Accredited Certification Programs',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 12,
                'page_category'     => 2,
                'name'              => 'Information security industry specialized Training ',
                'title'             => 'Information security industry specialized Training ',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 13,
                'page_category'     => 2,
                'name'              => 'Data Science & Business Analytics',
                'title'             => 'Data Science & Business Analytics',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 14,
                'page_category'     => 2,
                'name'              => 'DIGITAL TRANSFORMATION',
                'title'             => 'DIGITAL TRANSFORMATION',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 15,
                'page_category'     => 2,
                'name'              => 'IT Operation, Project and Service Management',
                'title'             => 'IT Operation, Project and Service Management',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 16,
                'page_category'     => 2,
                'name'              => 'IT / Security Risk, Compliance and Governance',
                'title'             => 'IT / Security Risk, Compliance and Governance',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 17,
                'page_category'     => 2,
                'name'              => 'Industry Specific Quality Management Programs',
                'title'             => 'Industry Specific Quality Management Programs',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'                => 18,
                'page_category'     => 2,
                'name'              => 'Server, Storage, Cloud and Virtualization',
                'title'             => 'Server, Storage, Cloud and Virtualization',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],

                       
        ];

        CourseCategory::insert($CourseCategoryDetails);
    }
}
