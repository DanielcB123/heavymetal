<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'name',
        'age',
        'email',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}



