<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqSubCategory extends Model
{
    public function faqCategory()
    {
        return $this->belongsTo(FaqCategory::class, 'faq_category_id');
    }
}
