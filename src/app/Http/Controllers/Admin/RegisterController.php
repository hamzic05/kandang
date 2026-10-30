<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
        $title = "Register Page";
        return view('auth.register', compact('title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => ['required', 'string', 'max:50', 'alpha_dash'],
                'email' => ['required', 'string', 'email:dns', 'unique:users,email'],
                'password' => ['required', 'string', 'confirmed', Password::min(8)],
                'phone' => ['required', 'string', 'max:13'],
                'address' => ['required', 'string']
            ],
            [
                'name.required' => 'Nama pengguna wajib diisi',
                'name.alpha_dash' => 'Nama pengguna hanya bisa berisi huruf, angka dan simbol',
                'name.max' => 'Nama pengguna maksimal 50',

                'email.required' => 'Email wajib diisi',
                'email.email' => 'Format email tidak valid',
                'email.unique' => 'Email sudah digunakan',

                'password.required' => 'Password wajib diisi',
                'password.confirmed' => 'Konfirmasi password salah',
                'password.min' => 'Password minimal 8 karakter',

                'phone.required' => 'No hp wajib diisi',
                'phone.max' => "No hp maksimal 13 karakter",

                'address.required' => "Alamat wajib diisi"
            ]
        );

        User::create($validated);

        return redirect()->route('login');
    }
}
