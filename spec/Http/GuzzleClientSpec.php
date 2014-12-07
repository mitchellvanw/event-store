<?php namespace spec\Mitchell\EventStore\Http;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use GuzzleHttp\Client;
use Mitchell\EventStore\Http\HttpClient;

class GuzzleClientSpec extends ObjectBehavior {

    function let(Client $client) {
        $this->beConstructedWith($client);
    }

    function it_is_a_http_client() {
        $this->shouldBeAnInstanceOf(HttpClient::class);
    }

    function it_makes_an_api_request(ApiRequest $request) {

    }
}
