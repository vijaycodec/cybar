<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industry2Title extends Model
{
    use HasFactory;

    protected $fillable = ['l3_content_info_id','title'];
}
