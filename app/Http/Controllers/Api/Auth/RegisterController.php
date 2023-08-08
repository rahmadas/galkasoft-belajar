<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function register(RegisterRequest $request)
    {

        $data = $request->validated();
        $data['password'] = bcrypt(($data['password']));
        $user = User::create($data);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Register Sukses',
            'data' => [
                'data' => $user,
                'token' => $token
            ]
        ]);
    }
}
