<?php

namespace Kkame\Space\Chats\Messages;

use GuzzleHttp\RequestOptions;
use Kkame\Space\Chats\Messages\Dto\MessageDto;
use Kkame\Space\Common;

class SendMessage extends Common
{

    public function push(string $token, MessageDto $message): bool
    {

        $this->client->post($this->baseUrl.'/api/http/chats/messages/send', [
            RequestOptions::HEADERS => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            RequestOptions::JSON => $message,
        ]);


        return true;
    }
}