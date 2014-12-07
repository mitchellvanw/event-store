<?php namespace spec\Mitchell\EventStore\Http;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Mitchell\EventStore\Http\ApiRequest;

class ReadStreamRequestSpec extends ObjectBehavior {

    function let() {
        $this->beConstructedWith('astream');
    }

    function it_is_an_api_request() {
        $this->shouldBeAnInstanceOf(ApiRequest::class);
    }

    function it_uses_the_get_verb() {
        $this->getVerb()->shouldReturn('GET');
    }

    function it_constructs_the_correct_uri_with_stread_id() {
        $this->getUri()->shouldReturn('/streams/astream');
    }

    function it_uses_the_correct_headers() {
        $headers = ['Content-Type' => 'application/vnd.eventstore.atom+json'];
        $this->getHeaders()->shouldReturn($headers);
    }
}
