<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
class Blog extends Model
{
    use HasFactory;
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'blogs.heading' => 10,
            'blog.author' => 10,
            'blog.category' => 10
        ]

        ];

    protected $fillable = [
        'heading',
        'bodyone',
        'bodytwo',
        'reference',
         'author',
         'category'
    ];
}
