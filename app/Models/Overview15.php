<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Overview15 extends Model
{
    use HasFactory;

    protected $fillable = ['l3_content_info_id', 'overview15_title', 'overview15_descriptions', 'image'];

    public function contentInfo()
    {
        return $this->belongsTo(L3ContentInfo::class, 'l3_content_info_id');
    }
}
