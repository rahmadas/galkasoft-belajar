<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function show()
    { 
        return response()->json([
            'data' => auth()->user(),
            'status' => 'true'
        ]);
    }
}
