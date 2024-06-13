<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_id', // Add this line
        'answer_text',
        // 'search_query',
        // 'search_results',
    ];

    protected $casts = [
        'search_results' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class); // Add this method
    }
}
