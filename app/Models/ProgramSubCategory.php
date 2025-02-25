<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramSubCategory extends Model
{
    // Relationship: Subcategory belongs to Program Category
    protected $fillable = [
        'program_category_id'
    ];
    public function programCategory()
    {
        return $this->belongsTo(ProgramCategory::class, 'program_category_id');
    }
}
