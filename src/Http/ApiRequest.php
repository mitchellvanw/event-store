<?php namespace Mitchell\EventStore\Http;

interface ApiRequest {

    public function getVerb();
    public function getUri();
    public function getHeaders();
} 