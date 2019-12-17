<?php


namespace Kkame\Space\Oauth\Dto;


class TokenResponseDto
{

    /**
     * @var string
     */
    public $token_type;
    /**
     * @var int
     */
    public $expires_in;
    /**
     * @var string
     */
    public $access_token;
    /**
     * @var string
     */
    public $scope;


}