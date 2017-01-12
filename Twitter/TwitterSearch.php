<?php
namespace Twitter;
/**
 * 
 */

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class TwitterSearch
{
    const API_URL = "https://api.twitter.com/1.1";

    protected $client;
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function search($value)
    {
        try{
            $url = self::API_URL . "/search/tweets.json";
            $post = ["q" => $value];
            $response = $this->client->get($url, array('query' => $post,));
            return json_decode($response->getBody()->getContents());
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    protected function statusCodeHandling($e)
    {
        if ($e->getResponse()->getStatusCode() == '400') {
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }
        elseif ($e->getResponse()->getStatusCode() == '422') {
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }
        elseif ($e->getResponse()->getStatusCode() == '500') {
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }
        elseif ($e->getResponse()->getStatusCode() == '401') {
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }
        elseif ($e->getResponse()->getStatusCode() == '403'){
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }
        else{
            $response = json_decode($e->getResponse()->getBody(true)->getContents());
            return $response;
        }
    }
}
