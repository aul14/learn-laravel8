<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'     => 'Register',
            'active'    => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'          => 'required|max:100',
            'username'      => ['required', 'min:3', 'max:100', 'unique:users,username'],
            'email'         => 'required|email:dns|unique:users,email',
            'password'      => 'required|min:5|max:100'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        // dd($validateData);

        User::create($validateData);

        // $request->session()->flash('sukses', 'Registration successfull! Please login');

        return redirect('/login')->with('sukses', 'Registration successfull! Please login');
    }
}
