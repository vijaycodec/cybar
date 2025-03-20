<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialDetails extends Model
{
    protected $fillable = [
        'l3_content_info_id',
        'testimonial_name',
        'designation',
        'testimonial_description',
        'testimonial_short_description',
        'testimonial_title',
        'images', // If storing image path
    ];
}
