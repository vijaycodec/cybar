<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Significance2Category extends Model
{
    protected $fillable = ['name', 'slug', 'page_category_id', 'category_id', 'sub_category_id'];

    public function l3ContentInfo()
    {
        return $this->belongsTo(L3ContentInfo::class, 'l3_content_info_id');
    }

    public function pageCategory()
    {
        return $this->belongsTo(PageDetail::class);
    }

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function Significance2SubCategory()
    {
        return $this->hasMany(Significance2::class, 'significance2_category_id');
    }

}
