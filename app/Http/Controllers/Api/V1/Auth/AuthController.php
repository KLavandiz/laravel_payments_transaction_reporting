<?php

namespace App\Http\Controllers\Api\V1\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Models\Transaction;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct(AuthService $service)
    {
        $this->authService = $service;
    }

    public function login(AuthRequest $request): jsonResponse
    {
        //Validate email and password and create user object to pass service layer.
        $user = $request->validateUser($request->rules(), $request->messages());

        $response = $this->authService->loginService($user);

        return $this->success($response->toArray());
    }
}
