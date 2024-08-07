<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        if (!Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return redirect()->back()->with('error', 'Email or Password incorrect');
        }

        $user = Auth::user();

        if ($user->role == 'admin' || $user->role == 'librarian') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('home');
        }
    }


    public function regist(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect()->route('login')->with('success', 'Registration Success!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}