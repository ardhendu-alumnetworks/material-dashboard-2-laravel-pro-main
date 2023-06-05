<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create',['roles'=>Role::get(['id','name'])]);
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
            'role_id'=>'required'
        ]);

        $user = User::create($attributes);
        auth()->login($user);
        
        return redirect('/user-profile');
    } 
}
