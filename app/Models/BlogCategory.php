<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable =['name', 'slug', 'page_category_id', 'category_id', 'sub_category_id'];
}
