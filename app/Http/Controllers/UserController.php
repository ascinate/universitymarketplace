<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);


        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        if($user['id']!= '')
        {
            Session::put('user_id', $user['id']);
            Session::put('user_email', $user['email']);
            Session::put('user_name', $user['name']);

            Auth::loginUsingId($user['id']);
            return redirect('/');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Session::put('user_id', Auth::id());
            Session::put('user_email', Auth::user()->email);
            Session::put('user_name', Auth::user()->name);
            return response()->json(['success' => true]);
        }

        return response()->json(['errors' => ['user' => ['Invalid credentials.']]], 422);
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        //return redirect('/')->with('success', 'Logged out successfully.');
        return redirect('/');
    }
}
