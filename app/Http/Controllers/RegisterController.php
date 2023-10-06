<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:users',
            'email' => 'required|max:255|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        
        $validated['password'] = Hash::make($validated['password']);
        // return $validated;

        User::create($validated);

        return redirect()->intended('/login')->with('regisSuccess', 'Registrasi berhasil!');
    }
}
