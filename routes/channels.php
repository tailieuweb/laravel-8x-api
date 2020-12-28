<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\Country;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.orders.{orderId}', function ($user, $orderId) {
    return (int) $user->id === (int) Order::findOrNew($orderId)->user_id;
});

Broadcast::channel('country-tracker.{id}', function ($user, $id) {
    return (int) $user->id === (int) Country::findOrNew($id)->user_id;
});
