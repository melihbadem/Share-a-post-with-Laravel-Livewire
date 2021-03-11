<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function() {

    Route::get('/register', \App\Http\Livewire\Register::class);
    Route::get('/login', \App\Http\Livewire\Login::class)->name('login');

});

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', \App\Http\Livewire\Post::class)->name('home');
    Route::get('/addpost', \App\Http\Livewire\Addpost::class);
    Route::get('/logout', \App\Http\Livewire\Logout::class);

});
