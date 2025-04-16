<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $fillable = ['name', 'slug', 'page_category_id', 'category_id', 'sub_category_id'];
    public function faqSubCategory()
    {
        return $this->hasMany(FaqSubCategory::class, 'faq_category_id');
    }
}
