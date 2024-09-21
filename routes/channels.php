<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });


Broadcast::channel('join', function (User $user, $id) {
    return [
        $user
    ];
});


// Broadcast::channel('users.{id}', function ($user, $id) {
//     return (int) 1 === (int) 1;
// });
