<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function indexLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    public function indexRegister()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if ($save) {
            return redirect()->route('login')->with('success', 'Register has been successfully!');
        } else {
            return redirect()->route('register')->with('error', 'Register failed!');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        Auth::attempt($request->only('email', 'password'));

        if (Auth::check()) {
            return redirect()->route('home')->with('success', 'Login has been successfully!');
        }



        return redirect()->route('login')->with('error', 'Email or password are incorrect.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
