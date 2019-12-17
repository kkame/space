<?php


namespace Kkame\Space;


use GuzzleHttp\Client;

class Common
{

    protected $baseUrl = "";
    /**
     * @var Client
     */
    protected $client;

    public function __construct(string $baseUrl, Client $client)
    {
        $this->baseUrl = $baseUrl;
        $this->client = $client;
    }
}