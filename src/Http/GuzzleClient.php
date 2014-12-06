<?php namespace Mitchell\EventStore\Http;

use GuzzleHttp\Client;

final class GuzzleClient implements HttpClient {

    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }
}