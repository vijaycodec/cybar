<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqSubCategory extends Model
{
    protected $fillable = [
        'l3_content_info_id',
        'faq_category_id',
        'sub_category_id', // ✅ Add this to allow mass assignment
        'page_id',
        'name',
        'title',
        'description',
    ];
    
    public function faqCategory()
    {
        return $this->belongsTo(FaqCategory::class, 'faq_category_id');
    }
}
