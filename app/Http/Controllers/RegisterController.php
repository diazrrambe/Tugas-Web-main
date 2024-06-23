<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'username' => 'required|min:3|max:200|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:200'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration success! Please Login');
    }
}
