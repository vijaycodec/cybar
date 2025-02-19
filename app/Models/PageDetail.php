<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageDetail extends Model
{
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'page_category_id');
    }

    public function pageCategory()
    {
        return $this->hasMany(L3Catrgory::class, 'page_category_id');
    }
    // public function coursecategory_page()
    // {
    //     return $this->hasMany(CourseCategory::class, 'page_category_id');
    // }
   
}
