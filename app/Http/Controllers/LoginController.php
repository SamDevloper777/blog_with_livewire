<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            //logic for authentication
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                Auth::login($user);
                return redirect()->intended('/');
            } else {
                // Register the user
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => encrypt('random_password')
                ]);

                Auth::login($user);

                return redirect()->intended('/');
            }

        } catch (\Exception $e) {
            return redirect()->route('login')->with('error','An error occured in login');
        }
    }
    public function authlogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
