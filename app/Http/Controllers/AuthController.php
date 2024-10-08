<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function signIn(LoginFormRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if (!Auth::attempt($request->validated())){
            return back()->withErrors([
                'email' => 'Пароль или логин неверные.'
            ])->onlyInput('email', 'password');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.index'));
    }

    public function register()
    {
        return view('admin.auth.register');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/admin');
    }
}
