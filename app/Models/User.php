<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roleUser(){
        return $this->belongsToMany(RoleUser::class);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

public function userrank(){
        return $this->hasOne(UserRank::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
   
    public function ratings(){
        return $this->hasMany(Rating::class);
    }

    public function responds(){
        return $this->hasMany(Respond::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }


    public function thanks(){
        return $this->hasMany(Thank::class);
    }

    public function banned(){
        return $this->hasOne(Banned::class);
    }



}
