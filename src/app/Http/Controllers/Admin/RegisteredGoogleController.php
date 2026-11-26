<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Socialite;
use Illuminate\Support\Str;

class RegisteredGoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $email = $googleUser->getEmail();

            if (!$email || !($googleUser->user['verified_email'] ?? false)) {
                return redirect()->route('register')->withErrors([
                    'google' => 'Email tidak valid atau belum terverifikasi',
                ]);
            }

            $user = User::where('google_id', $googleUser->getId())->orWhere('email', $email)->first();

            if ($user) {
                $user->forceFill([
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                ])->save();
            } else {
                $user = User::create([
                    'name' => Str::limit(
                        $googleUser->getName() ?: Str::before($email, '@'),
                        50,
                        ''
                    ),
                    'email' => $email,
                    'password' => Str::random(40),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                ]);
            }

            Auth::login($user);

            $request->session()->regenerate();

            $user->update([
                'last_login_ip' => $request->ip(),
            ]);

            return redirect()->intended(route('admin.dashboard.index'));
        } catch (\Throwable $e) {
            report($e);

            return redirect()->route('register')->withErrors([
                'google' => 'Registrasi dengan Google gagal. Silahkan coba kembali'
            ]);
        }
    }
}
