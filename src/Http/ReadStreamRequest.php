<?php namespace Mitchell\EventStore\Http;

final class ReadStreamRequest implements ApiRequest {

    private $streamId;

    public function __construct($streamId) {
        $this->streamId = $streamId;
    }

    public function getVerb() {
        return 'GET';
    }

    public function getUri() {
        return "/streams/{$this->streamId}";
    }

    public function getHeaders() {
        return ['Content-Type' => 'application/vnd.eventstore.atom+json'];
    }
}
