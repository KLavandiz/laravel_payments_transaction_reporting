<?php

namespace App\DTO;

class AuthResponseDTO
{
    public string $token;
    public string $status;

    /**
     * @param string $token
     * @param string $status
     */
    public function __construct(string $token, string $status)
    {
        $this->token = $token;
        $this->status = $status;
    }


    public function toArray():array
    {
        return [
            'token'=>$this->token,
            'status'=>$this->status
        ];
    }



}
