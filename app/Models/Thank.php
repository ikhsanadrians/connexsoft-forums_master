<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thank extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer_id',	
        'user_id'
    ];
    

    public function answer() {
        return $this->belongsTo(Answer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
