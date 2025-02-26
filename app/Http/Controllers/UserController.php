<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Events\UserRegistered;


class UserController extends Controller
{
    public function register(Request $request)
    {
        // Dummy User Create
        $user = User::create([
            'name' => "John Doe",
            'email' => "johndoe@example.com",
            'password' => bcrypt('password'),
        ]);

        

        // Event Trigger
        event(new UserRegistered($user));

        return response()->json(["message" => "User registered & event fired!"]);
    }
}
