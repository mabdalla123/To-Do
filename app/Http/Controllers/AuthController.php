<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
    
        $credentials = request(['email', 'password']);
        if (!auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => [
                    'password' => [
                        'Invalid credentials'
                    ],
                ]
            ], 422);
        }
    
        $user = User::where('email', $request->email)->first();
        $authToken = $user->createToken('auth-token')->plainTextToken;
    
        return response()->json([
            'access_token' => $authToken,
        ]);
    }


    public function logout()
    {
        
        auth('sanctum')->user()->tokens()->delete();
        return Response('Logout',200);
    }
}
