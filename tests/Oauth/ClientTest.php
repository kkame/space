<?php


namespace Tests\Space\Oauth;


use GuzzleHttp\Client;
use Kkame\Space\Oauth\Dto\TokenResponseDto;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * @test
     * @covers \Kkame\Space\Oauth\Client
     */
    public function getAuth()
    {
        $auth = new \Kkame\Space\Oauth\Client(getenv('BASE_URL'), new Client());


        $tokenDto = $auth->getToken(getenv('CLIENT_ID'), getenv('CLIENT_SECRET'));

        $this->assertIsObject($tokenDto);
        $this->assertInstanceOf(TokenResponseDto::class, $tokenDto);
        $this->assertObjectHasAttribute('token_type', $tokenDto);
        $this->assertObjectHasAttribute('expires_in', $tokenDto);
        $this->assertObjectHasAttribute('access_token', $tokenDto);
        $this->assertObjectHasAttribute('scope', $tokenDto);


    }

}