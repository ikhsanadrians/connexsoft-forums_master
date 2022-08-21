<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id',	
        'answer_id',	
        'comment_id',	
        'question_id',	
        'report_category_id',	
        'status'

    ];


    public function user(){
        return $this->belongsTo(User::class);
    } 

    public function answer(){
        return $this->belongsTo(Answer::class);
    }

    public function respond(){
        return $this->HasOne(Respond::class);
    }
    public function comment(){
        return $this->belongsTo(Comment::class);
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }
 
    public function category(){
        return $this->belongsTo(ReportCategory::class);
    }
    


}
