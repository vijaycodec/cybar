<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    // Define the relationship between Resource and Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

