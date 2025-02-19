<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
   public function subcategory()
{
    return $this->belongsTo(SubCategory::class , 'sub_category_id');
}

public function pageCategory()
{
    return $this->belongsTo(PageDetail::class, 'page_category_id');
}

public function category()
{
    return $this->belongsTo(CourseCategory::class, 'category_id');
}

}
