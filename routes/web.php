<?php

use App\Events\Example;
use App\Events\ExampleTwo;
use App\Events\UserJoin;
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/broadcast', function () {
    Broadcast(new UserJoin(User::find(2)));
    sleep(5);
    Broadcast(new UserJoin(User::find(1)));
    echo "broadcast";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
