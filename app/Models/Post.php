<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;

class Post extends Model
{
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        'title',
        'description',
        'body',
        'author',
        'hero'
    ];


    protected $allowedFilters = [
        'title' => Like::class,
    ];
}
