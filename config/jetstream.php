<?php

use Laravel\Jetstream\Features;
use Laravel\Jetstream\Http\Middleware\AuthenticateSession;

return [

    'stack' => 'inertia',

    'middleware' => ['web'],

    'auth_session' => AuthenticateSession::class,

    'guard' => 'sanctum',

    'features' => [
        Features::profilePhotos(),
        Features::accountDeletion(),
    ],

    'profile_photo_disk' => 'public',

];
