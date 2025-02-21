<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuBlogCategory extends Model
{
    use HasFactory;
 
    public function blogs()
    {
        return $this->hasMany(MenuBlog::class,'category_id');
    }
}
