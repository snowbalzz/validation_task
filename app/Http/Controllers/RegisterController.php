<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('register.create', [
            'users' => User::latest()->get()
        ]);
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
            'name' => 'required|string|not_regex:/[0-9]/|max:25|not_regex:/[@$!%*#?&_]/',
            'surname' => 'required|string|not_regex:/[0-9]/|max:25|not_regex:/[@$!%*#?&_]/',
            'tel' => 'required|size:8',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|string|regex:/[0-9]/|regex:/[A-Z]/|regex:/[a-z]/|regex:/[@$!%*#?&_]/',
            'distance' => 'required',
            'terms' => 'required',
        ], [
            'name.required' => 'Name is required',
            'password.required' => 'Password is required to register',
            'tel.required' => 'Phone is required to register',
            'tel.numeric' => 'Numbers must be imputed in this field',
            'terms.required'=>'You have to accept terms and conditions',
            'password.regex' => 'Password must be  must be at least 8 characters, contain at least one number, one symbol and both uppercase and lowercase letters.',
            'password.min' => 'Password must be  must be at least 8 characters, contain at least one number, one symbol and both uppercase and lowercase letters.',
            'email.email'=> 'Please enter your email address in format: example@email.com',
            'tel.size' => 'Phone number has to be 8 numbers long.',
            'name.not_regex' => 'Use only letters for this field.',
            'surname.not_regex' => 'Use only letters for this field.'
        ]); 


            
    $validatedData['password'] = bcrypt($validatedData['password']);

    $user = User::create($validatedData);
  
    return redirect('/');

    }
}
