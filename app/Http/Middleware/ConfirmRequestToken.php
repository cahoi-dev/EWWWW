<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class ConfirmRequestToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->token;

        $user = User::where('token', '=', $token)->first();

        $request["user_id"] = $user->id;

        $request["test"] = "hahah";

        return $next($request);
    }
}
