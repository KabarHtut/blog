<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        //validation
        $validation = request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create($validation);
        //login
        auth()->login($user);
        return redirect('/')->with('success', 'Welcome Dear, '.$user->name);
    }

    public function login(){
        return view('auth.login');
    }

    public function post_login(){
        $validation = request()->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required']
        ]);
        if(auth()->attempt($validation)){
            if(auth()->user()->is_admin){
                return redirect('/admin/blogs');
            }else{
                return redirect('/')->with('success', 'Welcome back');
            }
        }else{
            return redirect()->back()->withErrors([
                'email' => 'User Credentials Wrong'
            ]);
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye');
    }
}
