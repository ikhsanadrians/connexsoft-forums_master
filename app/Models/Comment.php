<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
    'content',
    'question_id',
    'answer_id',
    'comment_id',
    'user_id'

    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function answer() {
        return $this->belongsTo(Answer::class);
    }

    public function comment() {
        return $this->belongsTo(Comment::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function reports() {
        return $this->hasMany(Report::class);
    }
}
