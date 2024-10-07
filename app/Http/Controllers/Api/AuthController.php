<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:8',
            ]);
            $user = User::create($validatedData);
            $token = $user->createToken('auth_token')->plainTextToken;
            return new UserResource(true, 'Successfully Register User!', $token);
        } catch (ValidationException $ve) {
            return new UserResource(false, $ve->errors(), null);
        }
    }
    public function login(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            if (!Auth::attempt($validatedData)) {
                return new UserResource(false, 'Unauthorized', null);
            }
            $user = User::where('email', $validatedData['email'])->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;
            $user['token'] = $token;
            return new UserResource(true, 'Successfully Login User!', $user);
        } catch (ValidationException $ve) {
            return new UserResource(false, $ve->errors(), null);
        } catch (ModelNotFoundException $th) {
            return new UserResource(false, $th->getMessage(), null);
        }
    }
    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return new UserResource(true, 'Successfully Logout User!', null);
        } catch (\Throwable $th) {
            return new UserResource(false, $th->getMessage(), null);
        }
    }
}
