<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class SMME extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['name', 'slogan', 'image', 'category'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'smme_categories');
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        // Customize the array if necessary for Algolia
        return $array;
    }
}

