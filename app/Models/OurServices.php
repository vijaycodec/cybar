<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    

}
