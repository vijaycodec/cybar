<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class L3Overview20SubDescription extends Model
{
     use HasFactory;
    protected $fillable = ['l3_content_info_id' , 'overview20_sub_description', 'overview20_subdescription_title'];

    
    public function contentInfo()
    {
        return $this->belongsTo(L3ContentInfo::class, 'l3_content_info_id', 'id');
    }
}
