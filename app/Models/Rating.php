<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'answer_id',	
        'user_id',	
        'rate_id'

    ];

    public function answer(){
        return $this->belongsTo(Answer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function rate(){
        return $this->belongsTo(Rate::class); 
    }

 
}
