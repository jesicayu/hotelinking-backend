<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserRepository {
public function register($email, $password){
   
    $existingUser = User::where('email', $email) -> first();

    if ($existingUser) {
        return false;
    }
   
    $user = User::create([
        'email' => $email,
        'password' => Hash::make($request->password),
    ]);
    return $user;
}

public function login(Request $request){
    $email = $request->email;
}
}