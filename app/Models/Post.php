<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'parent_id',
        'body',
        'title',
    ];
}
