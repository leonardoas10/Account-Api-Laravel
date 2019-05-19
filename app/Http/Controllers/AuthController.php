<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller {
    public function signin(Request $request) {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return [
                "message" => "welcome",
                "token" => Auth::user()->api_token
            ]; 
        }
        else {
            return response( ["message" => "invalid credentials", "success" => false], 404);
        }
    }

    public function register(Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
     if ($request->input('name') !== null && $request->input('email') !== null && $request->input('password') !== null)  {
        $user = DB::table('users')->where('email', $email )->first();
        if($user === null) {
            $token = Str::random(60);
            DB::table('users')->insert(
                [
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'api_token' => hash('sha256', $token),
                ]
            );
        }
         return [
             "name" => $name,
             "email" => $email,
             "success" => true, 
         ];
     }
     else {
         return response ( ["message" => "invalid credentials", "success" => false], 404);
     }
    }
}