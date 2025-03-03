<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{

    use HasFactory;

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function blogs()
    {
        return $this->hasMany(MenuBlog::class);
    }

    public function events()
    {
        return $this->hasMany(MenuEvent::class);

    }

    public function testimonials()
    {
        return $this->hasMany(MenuTestimonial::class);

    }

    public function careers()
    {
        return $this->hasMany(Career::class);

    }
}
