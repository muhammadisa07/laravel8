<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' => 'login'
        ]);
    }
    public function store(Request $request){

       $validatedData =  $request->validate([
           'name' => 'required|max:50',
           'username' => ['required','min:5','max:20','unique:users'],
           'email' => ['required','unique:users','email:dns'],
           'password' => ['required','min:5','max:20']
       ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
       User::create($validatedData);
       $request->session()->flash('success', 'Registration Success! Please Login');
       return redirect('/login');


    }
}
