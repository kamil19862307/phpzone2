<?php

namespace App\Models;

use App\Traits\Models\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    public static function slugFrom(): string
    {
        return 'title';
    }

    protected $fillable = [
        'title',
        'slug',
        'content'
    ];
}
