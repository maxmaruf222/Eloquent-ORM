<?php

use App\Models\Mechanic;
use Illuminate\Support\Facades\Route;


//--has one
use App\Models\User;
Route::get('/hasOne', function () {
    //Normal Result
    $all = User::all();

    //hasOne Result
    $users = User::with('phone')->get();

    return [
        '____Normal-Result____'=>$all,
        'hasOne-Result____'=>$users,
    ];
});

// belongsTo
use App\Models\Phone;
Route::get('/belongsTo', function(){
    //Normal Result
    $all = Phone::all();

    //belongsTo Result
    $belongsTo = Phone::with('user')->get();

    return [
        '___Normal-Result___'=>$all,
        '___belongsTo-Result___'=>$belongsTo
    ];

});

//hasMany
Route::get('/hasMany', function(){
    //Normal Result
    $all = User::all();

    //hasMany Result
    $hasMany = User::with('village')->get();
    return [
        '___Normal-Result___'=>$all,
        '___hasMany-Result___'=>$hasMany
    ];
});

// has many through 
Route::get('hasManyThrough', function(){
    
    $all = Mechanic::all() ; 


    $hasManyThrough =Mechanic::with('ownerCar')->get();
    return [
        '___Normal-Result___'=>$all,
        '_____hasManyThrough-Result___'=>$hasManyThrough
    ];
});

// has one through 
Route::get('hasOneThrough', function(){
    
    $all = Mechanic::all() ; 


    $hasOneThrough =Mechanic::with('carOwner')->get();
    return [
        '___Normal-Result___'=>$all,
        '_____hasOneThrough-Result___'=>$hasOneThrough
    ];
});


// many to many
Route::get('manyTomany', function(){
    
    $all = User::all(); 


    $manyTomany =User::with('roles')->get();
    return [
        '___Normal-Result___'=>$all,
        '_____hasOneThrough-Result___'=>$manyTomany
    ];
});


// Accessors & Mutators 
Route::get('/mutator', function(){
    $data = User::all();

    return $data;
});
