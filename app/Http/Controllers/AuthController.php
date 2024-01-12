<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth/login");
    }
    public function register()
    {
        return view("auth/register");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "username" => "required",
            "password" => "required",
        ]);

        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended("/dashboard");
            }
            return back()->withErrors([
                "error" => "Username dan Password salah."
            ]);
        } catch (Exception $err) {
            return back()->withErrors([
                "error" => $err->getMessage()
            ]);
        }
    }

    public function create(Request $request)
    {
        $credentials = $request->validate([
            "username" => "required",
            "password" => "required",
        ]);

        User::create($credentials);
        $request->session()->regenerate();
        return back()->with("success", true);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
