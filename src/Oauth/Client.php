<?php


namespace Kkame\Space\Oauth;


use GuzzleHttp\RequestOptions;
use JsonMapper;
use Kkame\Space\Common;
use Kkame\Space\Oauth\Dto\TokenResponseDto;

class Client extends Common
{


    public function getToken(string $clientId, string $clientSecret): TokenResponseDto
    {


        $response = $this->client->post($this->baseUrl.'/oauth/token', [
            RequestOptions::HEADERS => [
                'Authorization' => 'Basic '.base64_encode($clientId.':'.$clientSecret),
                'Content-Type' => 'application/x-www-form-urlencoded',

            ],
            RequestOptions::FORM_PARAMS => [
                'grant_type' => 'client_credentials',
            ],
        ]);


        $json = $response->getBody()->getContents();

        $mapper = new JsonMapper();

        return $mapper->map(json_decode($json), new TokenResponseDto());


    }
}