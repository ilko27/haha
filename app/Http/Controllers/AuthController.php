<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $check = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if(!$check) {
            return redirect()->route('login');
        }

        return redirect()->route('index');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request = $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Auth::login($user);

        return redirect()->route('index');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
