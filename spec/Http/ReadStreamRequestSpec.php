<?php namespace spec\Mitchell\EventStore\Http;

use Mitchell\EventStore\Http\ApiRequest;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReadStreamRequestSpec extends ObjectBehavior {

    function it_is_an_api_request() {
        $this->shouldBeAnInstanceOf(ApiRequest::class);
    }
}
