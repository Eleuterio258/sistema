<?php

namespace App\Http\Controllers;
use  App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|between:2,100',
            'lastname' => 'required|string|between:2,150',
            'login' => 'required|string|email|max:100|unique:users',
            'fullname' => 'required|string|between:2,100',
            'password' => 'required|string|min:6'


        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated()
        ));

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }




    protected function createNewToken($token)
    {
        return response()->json([
            "message" => "Logged in Success",
            'id' => auth()->user()->id,
            'role' => auth()->user()->admin,
            'firstname' => auth()->user()->firstname,
            'login' => auth()->user()->login,
            'token' => $token,
            'expires_in' => auth()->factory()->getTTL() * 60,
        ]);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Either email or password is wrong.'], 401);
        }
        // Mail::to('alirezamosavi346@gmail.com')->send(new NewUserNotification());
        return $this->createNewToken($token);
    }


    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'User successfully logged out']);
    }


    public function userProfile()
    {
        return response()->json(auth()->user());
    }


    public function userAll()
    {
        $user = User::all();
        return $user;
    }
}
