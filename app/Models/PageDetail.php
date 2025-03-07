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
        return $this->hasMany(L3Category::class, 'page_category_id');
    }
    
    // public function l3Contant()
    // {
    //     return $this->hasMany(L3ContentInfo::class, 'page_category_id');
    // }
    
    public function seopageCategory()
    {
        return $this->hasMany(Seo::class, 'page_category_id');
    }
   
}
