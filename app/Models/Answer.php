<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'user_id',	
        'content',	
        'question_id',	
        'is_thebest'

    ]; 


    public function user(){ 

        return $this->belongsTo(User::class);
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }
      
    public function reports(){
        return $this->hasMany(Report::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }
 
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function thanks(){
        return $this->hasMany(Thank::class);
    }
}
