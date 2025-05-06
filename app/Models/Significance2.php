<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Significance2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'l3_content_info_id', 
        'significance2_category_id',
        'sub_category_id', // Add this to allow mass assignment
        'page_id',
        'name',
        'significance2_title', 
        'significance2_short_description', 
        'significance2_long_description', 
        'image'
    ];

    public function l3ContentInfo()
    {
        return $this->belongsTo(L3ContentInfo::class, 'l3_content_info_id');
    }

    public function Significance2Category()
    {
        return $this->belongsTo(Significance2Category::class, 'significance2_category_id');
    }
}
