<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function showRegisterPage()
    {
        return view('register');
    }

    public function startRegistration(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|max:30',
            'username'        => 'required|string|max:20',
            'email'           => 'required|email|unique:users,email',
            'password'        => 'required|confirmed|min:8',
        ]);



        $user = User::create([
            'name'            => $request->name,
            'username'        => $request->username,
            'email'           => $request->email,
            'password'        => $request->password
            
        ]);

        if(!is_null($user))
        {
            if(\Auth::attempt($request->only('email', 'password')))
            {
                return redirect('/')->with('success', "Account successfully registered.");
                
            }
            
        }
        else
        {
            return redirect('/register');

            // return view('register',[
            //     'name'            => $request->name,
            //     'username'        => $request->username,
            //     'email'           => $request->email,
            // ]); 
            //return back()->with("failed", "Alert! Failed to register");
        }
    }
}