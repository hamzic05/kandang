<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        $title = "Login Page";

        return view('auth.login', compact('title'));
    }

    public function store(Request $request)
    {
        $credentials = $request->validate(
            [
                'name' => ['required', 'string'],
                'password' => ['required', 'string'],
                'remember' => ['nullable', 'boolean']
            ],
            [
                'name.required' => 'Nama pengguna wajib diisi',
                'password' => 'Kata sandi wajib diisi'
            ]
        );

        $remember = $request->boolean('remember');

        if (!Auth::attempt([
            'name' => $credentials['name'],
            'password' => $credentials['password']
        ], $remember)) {
            throw ValidationException::withMessages([
                'name' => 'nama pengguna atau kata sandi salah',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard.index'));
    }
}
