<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.Auth.login');
    }
    public function handle(Request $request)
    {
        $creadentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3'],
        ]);
        // dd(Hash::make($request->password));

        $success = Auth::attempt($creadentials, true);
        if ($success) {
            $request->session()->regenerate();
            return to_route('/admin/works');
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
