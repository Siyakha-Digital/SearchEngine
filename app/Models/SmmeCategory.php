<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmmeCategory extends Model
{
    use HasFactory;

    protected $fillable = ['smme_id', 'category_id'];
}
