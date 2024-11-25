<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validasi data pendaftaran
        $validatedData = $request->validate([
            'name'=> 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Membuat user baru
        User::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}
