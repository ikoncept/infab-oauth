<?php

namespace Ikoncept\InfabOauth\Http\Controllers;

use Illuminate\Http\RedirectResponse as HttpRedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    public function redirectToProvider(): RedirectResponse
    {
        return Socialite::driver('infab')->redirect();
    }

    /**
     * Obtain the user information from Infab Oauth (auth.infab.nu).
     *
     * @return HttpRedirectResponse
     */
    public function handleProviderCallback(Request $request): HttpRedirectResponse
    {
        if ($request->has('error')) {
            return redirect()->route('login')
                ->with('permissionError', 'Du avböjde åtkomst till ditt konto');
        }

        $user = Socialite::driver('infab')->user();
        $has_access = false;
        $app_redirect = config('services.infab.redirect');
        $sites = $user->user['sites'];

        if (in_array($app_redirect, $sites)) {
            $has_access = true;
        }

        if (in_array('*', $sites)) {
            $has_access = true;
        }

        // Banned from everything
        if (in_array('!', $sites)) {
            $has_access = false;
        }

        if (! $has_access) {
            return redirect()->route('login')
                ->with('permissionError', 'Du har inte behörighet till denna applikationen');
        }

        if (auth()->guest()) {
            $userModel = config('infab-oauth.user_model');
            $existingUser = (new $userModel)->where('email', $user->email)->first();
            if (! $existingUser) {
                $user->getName();
                $newUser = (new $userModel)->forceCreate([
                    'name' => $user->name,
                    'email' => $user->email,
                    'email_verified_at' => now(),
                    'password' => bcrypt(Str::random(16)),
                ]);
                $newUser->assignRole('admin');
                Auth::login($newUser, true);

                return redirect()->to('/');
            }

            Auth::login($existingUser, true);

            return redirect()->to('/');
        }

        return redirect()->to('/');
    }
}
