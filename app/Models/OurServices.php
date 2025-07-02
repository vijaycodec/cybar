<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

class OurServices extends Model
{

    use HasFactory;

    protected $fillable = [
        'category_id', 
        'sub_category_id',
        'description', // Include all the columns you want to allow
        ];

    public function course_category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
    


    protected static function booted()
{
    static::saved(function () {
        Cache::forget('our_services_all');
        Cache::forget('our_services_grouped_by_category');
    });

    static::deleted(function () {
        Cache::forget('our_services_all');
        Cache::forget('our_services_grouped_by_category');
    });
}

}
