<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respond extends Model
{
    use HasFactory;
    
    protected $fillable = [
     
    'moderator_id',	
    'report_id',	
    'message',	
    'action',

    ];

    public function moderator(){
        return $this->belongsTo(User::class,"moderator_id","id"); 
    }

    public function report(){
        return $this->belongsTo(Report::class);
    }

}
