<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
{

    protected $fillable = ['name', 'slug', 'page_category_id', 'category_id', 'sub_category_id'];
    // Relationship: A program category may have subcategories
    public function programSubCategories()
    {
        return $this->hasMany(ProgramSubCategory::class, 'program_category_id');
    }

    // Relationship: A program category has associated program details stored in l3_content_infos
    public function programDetails()
    {
        return $this->hasOne(L3ContentInfo::class, 'program_category_id');
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
}
