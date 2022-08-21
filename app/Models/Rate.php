<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'names'
    ];

    public function rating(){
        return $this->hasMany(Rating::class);
    }
}
