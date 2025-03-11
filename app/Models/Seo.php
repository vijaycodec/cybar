<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
   // Relationship to PageDetail (Page Category)
   public function seopageCategory()
   {
       return $this->belongsTo(PageDetail::class, 'page_category_id');
   }    

   // Relationship to CourseCategory (Category)
   public function seocategory()
   {
       return $this->belongsTo(CourseCategory::class, 'category_id');
   }

   // Relationship to SubCategory (Sub Category)
   public function seosubCategory()
   {
       return $this->belongsTo(SubCategory::class, 'sub_category_id');
   }
}
