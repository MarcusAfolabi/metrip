<?php

namespace App\Http\Controllers;

use Closure;
use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(Request $request, Closure $next)
    {
        try {
            $google_user = Socialite::driver('google')->stateless()->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'last_name' => $google_user->getNickname(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'profile_photo_path' => $google_user->getAvatar(),
                    'token' => $google_user->token,
                    'refreshToken' => $google_user->refreshToken,
                    'expiresIn' => $google_user->expiresIn,
                ]);
                Auth::login($new_user);
                Mail::to($new_user->email)->send(new WelcomeMail($new_user));
                return $next($request);
            } else {
                Auth::login($user);
                return redirect(route('welcome'));
            }
        } catch (\Throwable $th) {
            return redirect(route('login'))->with('status', 'Something went wrong, try again with another email pls!' . $th->getMessage());
        }
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function forgot(){
        return view('auth.forgot-password');
    }

    public function reset(){
        return view('auth.reset-password');
    }
}
