<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    function login(LoginRequest $request)
    {

        //

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = User::where('email', $request->email)->first();
            // dd($user);
            $token = $user->createToken('auth_token')->plainTextToken;
            // $token['email'] = $user->email;

            return response()->json([
                'success' => true,
                'message' => 'Login Sukses',
                'data' => [
                    'data' => $user,
                    'token' => $token,
                ]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => "username and password didn't match",
            ])->setStatusCode(422);
        }


    }
}
