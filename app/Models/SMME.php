<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMME extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category',
        'description',
        'location',
        'contact_info',
    ];
}
