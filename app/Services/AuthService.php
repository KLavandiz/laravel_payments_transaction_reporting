<?php

namespace App\Services;

use App\DTO\AuthResponseDTO;
use App\DTO\UserDTO;
use App\Exceptions\AuthException;
use App\Interfaces\IAuth;
use function Webmozart\Assert\Tests\StaticAnalysis\boolean;

class AuthService
{
    private IAuth $authRepo;

    public function __construct(IAuth $IAuth)
    {
        $this->authRepo = $IAuth;
    }

    public function loginService(UserDTO $userDTO): AuthResponseDTO
    {
        $isAuth = $this->authRepo->userAttempt($userDTO);

        if (!$isAuth) {
            throw new AuthException(__('auth.failed')); //Error message from lang files
        }

        return $this->authRepo->findUserByUsername($userDTO);
    }
}
