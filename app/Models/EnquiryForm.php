<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnquiryForm extends Model
{
    protected $fillable = [
        'name',
        'email',
        'country_id',
        'country',
        'phone_code',
        'phone_no',
        'course',
        'message'
    ];
}
