<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'title',
        'thumbnail_path',
        'preview_path',
        'price',
        'author',
        'language',
        'description',
        'course_contents',
        'what_to_learn',
        'category_id',
    ];
}
