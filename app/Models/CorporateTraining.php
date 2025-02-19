<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateTraining extends Model
{
    use HasFactory;

    public function course_category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id',);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
