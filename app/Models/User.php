<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

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




    // Accessors & Mutators 
    /**
     * Get the user's name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function Name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Str::upper($value),
            set: fn ($value) => Str::lower($value),
        );
    }
}
