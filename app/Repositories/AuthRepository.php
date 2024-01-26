<?php

namespace App\Repositories;

use App\DTO\AuthResponseDTO;
use App\DTO\UserDTO;
use App\Facade\StatusFacade;
use App\Interfaces\IAuth;
use App\Models\User;

class AuthRepository implements IAuth
{

    public function findUserByUsername(UserDTO $userDTO): ?AuthResponseDTO
    {
        $User = User::where('email', $userDTO->email)->first();
        $status = StatusFacade::APPROVED;
        $token = $User->createToken('AccessToken')->accessToken; // Token valid for only 10 mins , please check Providers/AppServiceProvider for token expire time.
        return new AuthResponseDTO($token, $status);
    }

    public function userAttempt(UserDTO $user): bool
    {
        return auth()->attempt(['email' => $user->email, 'password' => $user->password]);
    }

}
