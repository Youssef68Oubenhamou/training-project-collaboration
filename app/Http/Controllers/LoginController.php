<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.Auth.login');
    }
    public function handle(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3'],
        ]);


        $success = Auth::attempt($credentials);
        if ($success) {
            $request->session()->regenerate();
            return to_route('works.index');
        } else {
            return to_route('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login');
    }
}
