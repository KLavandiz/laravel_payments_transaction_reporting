<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * @test
     */
    public function SuccessfulLoginTest(): void
    {
        $user = User::create([
            'name' => 'kemal',
            'email' => 'kemal@lavandiz.com',
            'password' => Hash::make('pasw0rd'),
        ]);
        $response = $this->withHeaders([
            'Accept' => 'application/json',

        ])->post(route('login'), ['email' => $user->email, 'password' => 'pasw0rd']);

        User::destroy($user->id);
        $response->assertStatus(Response::HTTP_OK);
        $this->assertAuthenticated();
    }

    /**
     * @test
     */
    public function failedLoginTest(): void
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',

        ])->post(route('login'), ['email' => 'invalid@email.com', 'password' => 'InvalidPassword']);

        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
        $this->assertGuest();
    }

    /**
     * @test
     */
    public function loginStructureTest()
    {

        $user = User::create([
            'name' => 'kemal',
            'email' => 'kemal@lavandiz.com',
            'password' => Hash::make('pasw0rd'),
        ]);
        $this->withHeaders([
            'Accept' => 'application/json',

        ])->post(route('login'), ['email' => 'kemal@lavandiz.com', 'password' => 'pasw0rd'])
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure(
                [

                        'data'=>[
                            'token',
                            'status'
                          ],
                    'message',
                    'errorCode',
                    'source'

                ]
            );

        User::destroy($user->id);
    }
}
