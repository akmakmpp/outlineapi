<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
    		'password' => 'required',
        ]);
        $admin = User::where('email', $request->email)->first();
        
        if(!$admin){
            return response()->json([
            'status'	=> false,
            'message' 	=> "Unauthorized"
        ],401);
    }
        if(!(Hash::check($request->password,  $admin->password))){
            return response()->json([
                'status'	=> false,
                'message' 	=> "Unauthorized"
            ],401);
        }
        
        $admin['token'] = 'Bearer '.$admin->createToken('auth_token')->plainTextToken;

       
       
        return response()->json([
            'status'=>true,
            'message'=>'success',
            'data'=> $admin
        ],200);


    }
}
