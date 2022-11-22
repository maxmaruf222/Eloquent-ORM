<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
     // notice that here the attribute name is in snake_case
     protected $appends = ['default_numbeer'];


    /**
     * 
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getDefaultNumbeerAttribute()
    {
        return '00000000000000000';
    }
}
