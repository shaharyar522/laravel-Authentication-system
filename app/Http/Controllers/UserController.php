<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        // ✅ Hash the password before saving
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($user) {
            return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
        }
        return back()->withInput()->withErrors(['general' => 'Something went wrong. Try again.']);

    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

         $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return  redirect()->route('dashboard');
        }

    }


    public function DashboardPage()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
       Auth::logout();
       return view('login');
    }
}
