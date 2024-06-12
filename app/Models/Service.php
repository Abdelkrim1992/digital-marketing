<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_title',
        'service_description',
        'button_text',
        'service_icon',
        'service_hover',
        'short_description',
    ];
}
