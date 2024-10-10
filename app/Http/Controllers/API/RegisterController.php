<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $input = $request->only('name', 'email', 'password');
        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $token = $user->createToken('MyApp')->accessToken;

        return response()->json(['token' => $token, 'name' => $user->name], 200);
    }


    public function login(Request $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;

            return response()->json(['token' => $token, 'name' => $user->name], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}
