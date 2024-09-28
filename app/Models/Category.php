<?php

namespace App\Models;

use App\Traits\Models\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail'
    ];

    public static function slugFrom(): string
    {
        return 'title';
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
