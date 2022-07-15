<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required',
        ]);

        $user = User::firstWhere('user', $request->user);


        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'user' => __('auth.failed'),
            ]);
        }

        return response()->json([
            'fullName' => $user->full_name
        ]);
    }
}
