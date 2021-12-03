# authenticate via infab/oauth

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ikoncept/infab-oauth.svg?style=flat-square)](https://packagist.org/packages/ikoncept/infab-oauth)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ikoncept/infab-oauth/run-tests?label=tests)](https://github.com/ikoncept/infab-oauth/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ikoncept/infab-oauth/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ikoncept/infab-oauth/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ikoncept/infab-oauth.svg?style=flat-square)](https://packagist.org/packages/ikoncept/infab-oauth)



## Installation

You can install the package via composer:

```bash
composer require ikoncept/infab-oauth
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Ikoncept\InfabOauth\InfabOauthServiceProvider" --tag=config
```


Add the following to your `config/services.php`-file

```php
'infab' => [
    'client_id' => env('INFAB_CLIENT_ID'),
    'client_secret' => env('INFAB_CLIENT_SECRET'),
    'redirect' => env('INFAB_CLIENT_REDIRECT'),
]
```

This is the contents of the published config file:

```php
return [
    'client_id' => env('INFAB_CLIENT_ID'),         // Your Infab Client ID
    'client_secret' => env('INFAB_CLIENT_SECRET'), // Your Infab Client Secret
    'redirect' => env('INFAB_CLIENT_REDIRECT'),
    'user_model' => env('INFAB_USER_MODEL', \App\Models\User::class)
];
```

Add the following to your `.env` file
```
INFAB_CLIENT_ID
INFAB_CLIENT_SECRET
INFAB_CLIENT_REDIRECT
```

## Testing

```bash
composer test
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
