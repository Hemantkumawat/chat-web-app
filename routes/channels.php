<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('channel_for_everyone', function ($user) {
    \Illuminate\Support\Facades\Log::info('USER IS:::',$user->toArray());
    return true;
});
/*Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});*/
