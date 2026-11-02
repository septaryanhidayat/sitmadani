<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $throttleKey = Str::transliterate(Str::lower($request->input('email')).'|'.$request->ip());

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);

            return back()->withErrors([
                'email' => "Terlalu banyak percobaan login gagal. Demi keamanan, silakan coba lagi dalam {$seconds} detik.",
            ])->onlyInput('email');
        }

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            RateLimiter::clear($throttleKey);
            $request->session()->regenerate();

            try {
                ActivityLog::create([
                    'user_id' => Auth::id(),
                    'user_name' => Auth::user()?->name ?? 'Administrator',
                    'action' => 'login_success',
                    'description' => 'Login berhasil ke panel administrator',
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'status' => 'info',
                ]);
            } catch (\Throwable $e) {
                Log::warning('ActivityLog login error: '.$e->getMessage());
            }

            return redirect()->intended(route('admin.dashboard'));
        }

        RateLimiter::hit($throttleKey, 60);

        try {
            ActivityLog::create([
                'user_id' => null,
                'user_name' => 'Tamu / Percobaan',
                'action' => 'login_failed',
                'description' => 'Percobaan login gagal untuk email: '.$request->input('email'),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'status' => 'warning',
            ]);
        } catch (\Throwable $e) {
            Log::warning('ActivityLog failed error: '.$e->getMessage());
        }

        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan tidak sesuai.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        if ($user = Auth::user()) {
            try {
                ActivityLog::create([
                    'user_id' => $user->id,
                    'user_name' => $user->name,
                    'action' => 'logout',
                    'description' => 'Keluar dari sesi administrator',
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'status' => 'info',
                ]);
            } catch (\Throwable $e) {
                Log::warning('ActivityLog logout error: '.$e->getMessage());
            }
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Anda telah berhasil keluar dari akun.');
    }
}
