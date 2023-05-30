<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User as UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginAuth(Request $request){
        if (Auth::attempt(['email'=>$request->email , 'password'=>$request->password])){
            return redirect(route('home'));
        }
        return back()->withErrors('Invalid Email or password'); 
    }
    public function auth(array $credential){
        Auth::attempt(['email'=>$credential['email'] , 'password'=>$credential['password'] ]);
    }
    public function register(){
        return view('auth.register'); 
    }
    public function storeUser (Request $request){
        // dd($request->all()); 
        $request->validate([
            'email'=>'required|email|unique:users',            
        ],[
            'email.unique:Email is already exist u!'
        ]); 
        //store user in db
        UserModel::create([
            'first_name'=>$request->first_name, 
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]); 

        //do login  auth
        $this->auth([
            'email'=>$request->email,
            'password'=>$request->password,
        ]); 
        
        //back to home page after login
        return redirect(route('home'));

    }
    public function logout(){
        Auth::logout(); 
        return back();
    }
}
