<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'tags',
        'user_id',
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
