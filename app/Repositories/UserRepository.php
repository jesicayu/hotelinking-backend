<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserRepository {
public function register($email, $password){
   
    $existingUser = User::where('email', $email) -> first();

    if ($existingUser) {
        return false;
    }
   
    $user = User::create([
        'email' => $email,
        'password' => Hash::make($password),
    ]);
    return $user;
}

public function login($email, $password)
{
    $credentials = ['email' => $email, 'password' => $password];

    if (!Auth::attempt($credentials)) {
        return false;
    }

    return Auth::user();
}
}