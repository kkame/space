<?php


namespace Kkame\Space\Chats\Messages\Dto;


class MessageDto
{

    /**
     * @var string
     */
    public $channel;
    /**
     * @var string
     */
    public $text;

    public function __construct(string $channel , string $text)
    {
        $this->channel = $channel;
        $this->text = $text;
    }

}