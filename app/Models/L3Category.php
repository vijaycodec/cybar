<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class L3Category extends Model
{

    use HasFactory;
    
    public function l3ContentInfos()
    {
        return $this->hasMany(L3ContentInfo::class, 'l3_category_id');
    }

   
    public function pageCategory()
    {
        return $this->belongsTo(PageDetail::class, 'page_category_id');
    }

    /**
     * Relationship with Category model.
     */
    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }

    /**
     * Relationship with SubCategory model.
     */
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function contentInfos()
    {
        return $this->hasMany(L3ContentInfo::class, 'l3_category_id', 'id');
    }


    
}
