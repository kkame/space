<?php

namespace Tests\Space\Chats\Messages;

use GuzzleHttp\Client;
use Kkame\Space\Chats\Messages\Dto\MessageDto;
use Kkame\Space\Chats\Messages\SendMessage;
use PHPUnit\Framework\TestCase;

class SendMessageTest extends TestCase
{


    /**
     * @covers \Kkame\Space\Chats\Messages\SendMessage
     * @test
     */
    public function SendMessage()
    {


        $auth = new \Kkame\Space\Oauth\Client(getenv('BASE_URL'), new Client());


        $tokenDto = $auth->getToken(getenv('CLIENT_ID'), getenv('CLIENT_SECRET'));


        $sendMessage = new SendMessage(getenv('BASE_URL'), new Client());

        $message = new MessageDto(getenv('CHANNEL_ID'), 'text');
        $result = $sendMessage->push($tokenDto->access_token, $message);
        $this->assertTrue($result);


    }


}