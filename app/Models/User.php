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
}
