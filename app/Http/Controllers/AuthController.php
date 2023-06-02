<?php

namespace App\Http\Controllers;

use App\Listeners\AssignAdminRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use NoCaptcha;

class AuthController extends Controller
{
    public function registerOrLoginForm()
    {
        return view('auth.login-register-with-captcha');
    }

    // Register view
    public function register_form()
    {
        return view('auth.register');
    }

    // Register user
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            // 'g-recaptcha-response' => 'required|captcha',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        event(new AssignAdminRole($validated));
        Auth::login($user);

        return redirect('/');
    }

    public function login_form()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
//            'g-recaptcha-response' => 'required|captcha',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('authenticate');
    }
}
