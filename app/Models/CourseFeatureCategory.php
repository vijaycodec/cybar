<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseFeatureCategory extends Model
{
    protected $fillable = ['name', 'slug'];
    public function l3ContentInfo()
    {
        return $this->belongsTo(L3ContentInfo::class, 'l3_content_info_id');
    }
}
