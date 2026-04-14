<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:120',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // First ever registered user becomes the admin automatically.
        $data['is_admin'] = User::count() === 0;

        $user = User::create($data);
        Auth::login($user);

        if ($user->is_admin) {
            return redirect()->route('admin.appointments')
                ->with('flash', 'Welcome, Admin! Dashboard is ready.');
        }

        return redirect()->route('home')
            ->with('flash', 'Account created! You do not have admin access.');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $creds = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($creds, $request->boolean('remember'))) {
            $request->session()->regenerate();

            if (Auth::user()->is_admin) {
                return redirect()->route('admin.appointments');
            }

            return redirect()->route('home')
                ->with('flash', 'Logged in, but you are not an admin.');
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
