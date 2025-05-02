<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SignificanceCategory extends Model
{
    protected $fillable = ['name', 'slug', 'page_category_id', 'category_id', 'sub_category_id'];

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
}
