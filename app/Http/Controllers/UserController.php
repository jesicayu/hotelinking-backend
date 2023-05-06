<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;


class UserController extends Controller
{
    private $userRepository;
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    public function registerUser(Request $request){
        $email = $request->email;
        $password = $request->password;

        $user = $this->userRepository->register($email, $password);

        if(!$user){
            return response()->json(['message' => 'Email already exists'], 409);
        }

        return response()->json(['message' => 'User created'], 201);
    }
}
