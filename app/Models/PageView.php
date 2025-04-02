<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    protected $fillable = ['page_name', 'views', 'view_date','user_ip','is_new_visitor'];

}
