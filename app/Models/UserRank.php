<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRank extends Model
{
    use HasFactory;


    protected $fillable = [ 
        
        'user_id',	
        'rank_id'

    ];

   public function rank(){
    return $this->belongsTo(Rank::class);

   }

   public function users(){
    return $this->belongsTo(User::class);
   }

}
