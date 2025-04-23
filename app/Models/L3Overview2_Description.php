<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class L3Overview2_Description extends Model
{
    use HasFactory;

    protected $fillable = ['l3_content_info_id','overview2_title','overview2_short_descriptions','overview2_long_descriptions'];
    
    public function contentInfo()
    {
        return $this->belongsTo(L3ContentInfo::class, 'l3_content_info_id', 'id');
    }

}
