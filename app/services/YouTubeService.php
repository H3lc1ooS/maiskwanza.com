<?php

namespace App\Services;

use Google\Client;
use Google\Service\YouTube;


class YouTubeService
{
    private $client;
    private $service;
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->initializeClient();
    }

    private function initializeClient()
    {
        $this->client = new Client();
        $this->client->setDeveloperKey($this->apiKey);
        $this->service = new YouTube($this->client);
    }

    public function getService()
    {
        return $this->service;
    }
}
