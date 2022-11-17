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
