<?php


namespace Tests\Space;


use GuzzleHttp\Client;
use Kkame\Space\Common;
use PHPUnit\Framework\TestCase;

class CommonTest extends TestCase
{
    /**
     * @test
     * @covers \Kkame\Space\Common
     */
    public function Construct()
    {
        $common = new Common(getenv('BASE_URL'), new Client());

        $this->assertIsObject($common);

    }

}