<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where([
            ['username', '=', $request->username],
            ['password', '=', $request->password]
        ])->first();

        if ($user == null) return response([
            "error" => "username or password are incorrect"
        ], 401);

        return response([
            "token" => $user->token
        ], 200);
    }
}
