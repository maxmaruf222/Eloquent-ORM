<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // has one
    public function phone()
    {
        return $this->hasOne(Phone::class, 'user_id');
        //user_id is foreign key
    }

    /**
     * Get the village for the user.
     */
    public function village()
    {
        return $this->hasMany(village::class, 'user_id');
    }


    //crate many to many method
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
