<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    
    protected $tables = 'testimonials';
    
    protected $fillable =[
        'pdp',
        'name',
        'description',
        'role',
    ];
}
