<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndustryCategory extends Model
{
    public function l3ContentInfo()
    {
        return $this->belongsTo(L3ContentInfo::class, 'l3_content_info_id');
    }
}
