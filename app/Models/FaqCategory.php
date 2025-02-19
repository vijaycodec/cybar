<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    public function faqSubCategory()
    {
        return $this->hasMany(FaqSubCategory::class, 'faq_category_id');
    }
}
