<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function UserRanks(){

        return $this->hasMany(UserRank::class);

    }


    
} 
