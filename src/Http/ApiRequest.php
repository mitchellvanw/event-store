<?php namespace Mitchell\EventStore\Http;

interface ApiRequest {

    public static function usingId($steamId);
    public function getVerb();
    public function getUri();
    public function getHeaders();
} 