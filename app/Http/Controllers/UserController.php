<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
class UserController extends Controller
{
    function Signup(Request $request){
  $request->validate([
        'username' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
    ]);

     User::create([
        'username' => $request['username'],
        'email' => $request['email'],
        'password' => $request['password'],//Hash::make(),
        
    ]);
     return response(['message' => 'User registered successfully']);

    }
 
   

    function login(Request $request){
        error_log('login called');
        $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ]);
     $user= User::where('email', $request['email'])->first();
     //return response(['user:'=>$user['password']'req:'=>$request['password']]);
    // $hp=Hash::make();
      if ($user['password']==$request['password']){
 return response()->json(['message' => 'User Found'], 201);
      }
else{
return response()->json(['message' => 'User not found'], 201);
}
    

    }


function create(Request $request){
        error_log('create user called');
    }



    function read(){
         error_log('read user called');
    return response(User::all());
    }

    function patch(Request $request){
        error_log('patch user called');
    }



    function delete(){
         error_log('delete user called');
    }
}

