<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    // has one through
    public function carOwner()
    {
        return $this->hasOneThrough( Owner::class, Car::class,);
        /**
         * The first argument passed to the hasOneThrough method 
         * is the name of the final model we wish to access, 
         * while the second argument is the name of the intermediate model.
         */
    }

    // has many through
    public function ownerCar()
    {
        return $this->hasManyThrough( Owner::class, Car::class, );
        /**
         * The first argument passed to the hasManyThrough method 
         * is the name of the final model we wish to access, 
         * while the second argument is the name of the intermediate model.
         */
    }

}
