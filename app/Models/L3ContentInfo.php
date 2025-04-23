<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class L3ContentInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_category_id',
        'category_id',
        'sub_category_id',
        'l3_category_id',
    ];

    public function l3Category()
    {
        return $this->belongsTo(L3Category::class, 'l3_category_id', 'id');
    }

    public function significanceCategory()
    {
        return $this->belongsTo(SignificanceCategory::class, 'significance_category_type', 'id');
    }

    public function significance_title()
    {
        return $this->hasOne(SignificanceTitle::class, 'l3_content_info_id');
    }

    public function overviewSubDescriptions()
    {
        return $this->hasMany(L3OverviewSubDescription::class, 'l3_content_info_id', 'id');
    }
    public function overview2Descriptions()
    {
        return $this->hasMany(L3Overview2_Description::class, 'l3_content_info_id');
    }
    
    public function coursefeatureCategory()
    {
        return $this->belongsTo(CourseFeatureCategory::class, 'course_feature_type', 'id');
    }

    public function coursefeature_title()
    {
        return $this->hasOne(CourseFeatureTitle::class, 'l3_content_info_id');
    }

    public function cyberwindCategory()
    {
        return $this->belongsTo(CyberwindCategory::class, 'cyberwind_type', 'id');
    }

    public function cyberwind_title()
    {
        return $this->hasOne(CyberwindTitle::class, 'l3_content_info_id');
    }


    public function industryCategory()
    {
        return $this->belongsTo(IndustryCategory::class, 'industry_type', 'id');
    }

    public function industry_title()
    {
        return $this->hasOne(IndustryTitle::class, 'l3_content_info_id');
    }

    public function blog_title()
    {
        return $this->hasOne(BlogTitle::class, 'l3_content_info_id');
    }

    public function faqCategory()
    {
        return $this->belongsTo(FaqCategory::class, 'faq_category_id', 'id');
    }

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_type', 'id');
    }

    public function testimonials()
    {
        return $this->hasMany(TestimonialDetails::class, 'l3_content_info_id', 'id');
    }

    // Relationship: L3ContentInfo belongs to a Program Category
    public function programCategory()
    {
        return $this->belongsTo(ProgramCategory::class, 'program_category_id');
    }

    public function programSubCategory()
    {
        return $this->hasOne(ProgramSubCategory::class, 'sub_category_id', 'sub_category_id');
    }

    public function pageCategory()
    {
        return $this->belongsTo(PageDetail::class, 'page_category_id');
    }

    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
