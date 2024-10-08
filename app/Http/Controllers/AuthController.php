<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\SignUpFormRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(): Application|Factory|View
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

    public function register(): Application|Factory|View
    {
        return view('admin.auth.register');
    }

    public function signUp(SignUpFormRequest $request)
    {
        if (!$request->validated()){
            return back()->withErrors(['error' => 'Введены некорректные данные!'])->withInput();
        }

        $user = User::query()->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
            ]);

        event(new Registered($user));

        auth()->login($user);

        return redirect()->intended(route('admin.index'));
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/admin');
    }
}
