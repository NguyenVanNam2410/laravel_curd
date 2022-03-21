<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();
        $token =  $user->createToken('fundaProjectToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];
        return response($response,201);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required|string'
        ]);
        $user = User::where('email',$request->email)->first();

        if(!$user || !Hash::check($data['password'], $user->password)){
            return response()->json(['message' => 'đăng nhập thất bại'],401);
        }else{
            $token = $user->createToken('fundaProjectToken')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token,
            ];
            return response($response,200);
        }
    }
    public function logout()
    {
        Auth::user()->tokens->each(function($token, $key) {
            $token->delete();
        }); 
        return response()->json('Successfully logged out');
    }
    public function login()
    {
        return view('login.login');
    }
}
