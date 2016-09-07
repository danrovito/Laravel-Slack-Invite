<?php

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testSlackInvite()
    {
        $invite = \Darovi\LaravelSlackInvite\Slack::invite(env('TEST_EMAIL'));

        $data = json_decode($invite, true);

        $this->assertArrayHasKey('ok', $data);
    }
}
