<?php

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
