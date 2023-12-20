<?php

namespace App\Services;

use GuzzleHttp\Client;

class NewsService
{
    protected $apiKey;
    protected $client;

    public function __construct()
    {
        $this->apiKey = 'eee0764859ce4cacb8227d16293a24bb';
        $this->client = new Client([
            'base_uri' => 'https://newsapi.org/v2/',
        ]);
    }

    public function fetchTopHeadlines($category = 'business', $country = 'us')
    {
        $response = $this->client->get('top-headlines', [
            'query' => [
                'country' => $country,
                'category' => $category,
                'apiKey' => $this->apiKey,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
