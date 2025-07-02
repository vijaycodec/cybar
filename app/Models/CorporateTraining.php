<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class CorporateTraining extends Model
{
    use HasFactory;

    public function course_category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }


    /**
     * Automatically clear relevant cache when training data changes.
     */
    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('corporate_training_services');
        });

        static::deleted(function () {
            Cache::forget('corporate_training_services');
        });
    }
}
