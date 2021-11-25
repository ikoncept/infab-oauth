<?php
// config for Ikoncept/InfabOauth
return [
    'client_id' => env('INFAB_CLIENT_ID'),         // Your Infab Client ID
    'client_secret' => env('INFAB_CLIENT_SECRET'), // Your Infab Client Secret
    'redirect' => env('INFAB_CLIENT_REDIRECT'),
    'user_model' => env('INFAB_USER_MODEL', \App\Models\User::class)
];
