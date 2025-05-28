<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseCategory extends Model
{
    use HasFactory;

     // Define the relationship between Services and Category

    protected $fillable = ['page_category', 'name', 'slug', 'title','category_group'];

    public function services()
    {
        return $this->hasMany(OurServices::class, 'category_id');
    }
    
    public function training()
    {
        return $this->hasMany(CorporateTraining::class, 'category_id');
    }
        
        public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
    
    public function coursecategory()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
   
    public function pageCategory()
    {
        return $this->belongsTo(PageDetail::class, 'page_category');
    }

    public function seocategory()
    {
        return $this->hasMany(Seo::class, 'category_id');
    }

    public function l3Contents()
    {
        return $this->hasMany(L3ContentInfo::class, 'category_id');
    }
}
