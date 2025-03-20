<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramSubCategory extends Model
{
    // Relationship: Subcategory belongs to Program Category
  protected $fillable = [
    'l3_content_info_id',
    'program_category_id',
    'sub_category_id',
    'page_id',
    'name',
    'description',
    'image',
];

    public function programCategory()
    {
        return $this->belongsTo(ProgramCategory::class, 'program_category_id');
    }
}
