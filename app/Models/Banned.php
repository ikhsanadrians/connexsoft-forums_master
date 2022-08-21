<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banned extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id',	
        'moderator_id',	
        'start_date',	
        'end_date'

    ];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function moderator(){
         return $this->belongsTo(User::class,"moderator_id","id");
    }
}
