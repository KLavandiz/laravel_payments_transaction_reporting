<?php

namespace App\Interfaces;

use App\DTO\AuthResponseDTO;
use App\DTO\UserDTO;

interface IAuth
{
    public function findUserByUsername(UserDTO $userDTO): ?AuthResponseDTO;

    public function userAttempt(UserDTO $user): bool;

}
