<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;    

class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    
    public function doLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect('/login')->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            if(Auth::id()){
                $usertype=Auth()->user()->usertype;
    
                if($usertype=='user'){
                    return redirect('/dashboard');
                }
                else {
                    return redirect('/adminPage');
                }
            }
            
        }

        return redirect('/login')->with('error', 'Invalid email or password.');
    }
    
    public function doLogout(){
        Auth::logout();
        return redirect('/login');
    }

    public function register(){
        return view('auth.register');
    }

    public function doRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()){
            return redirect('/register')->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'phone_number' => $request->input('phone_number'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email')
        ]);

        return redirect('/login')->with('success', 'Registration successful.');    
    }
}