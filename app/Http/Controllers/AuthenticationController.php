<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterRequest;

class AuthenticationController extends Controller
{
    public function login(): View | RedirectResponse
    {
        return view('login');
    }

    public function register(): View | RedirectResponse
    {
        return view('register');
    }

    public function loginAction(LoginRequest $request)
    {
        $validated = $request->validated();

        $user = User::where('email', $validated['email'])->first();

        if (! $user || ! Hash::check($validated['password'], $user->password)) {

            return back()->with('error', 'Invalid Credentials');
        }
        
        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Login successful');

    }

    public function registerAction(RegisterRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);
        
        User::create($validated);
        
        return redirect()->route('login')->with('success', 'Registration successful');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logout succesful');

    }
}
