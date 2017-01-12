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
    protected $token = null;
    protected $tokensecret = null;
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function setTokken($token,$secret)
    {
        $this->token = $token;
        $this->tokensecret = $secret;
    }
    public function prepareAccessToken()
    {
        try{
            $url = self::API_URL ."/oauth2/token";
            $value = ['grant_type' => "client_credentials"
            ];
            $header = array('Authorization'=>'Basic ' .base64_encode($this->token.":".$this->tokensecret),
            "Content-Type"=>"application/x-www-form-urlencoded;charset=UTF-8");
            $response = $this->client->post($url, ['query' => $value,'headers' => $header]);
            $result = json_decode($response->getBody()->getContents());
            die("here");
            return $result;
            $this->accessToken = $result->access_token;
        }
        catch (RequestException $e) {
            $response = $this->statusCodeHandling($e);
            return $response;
        }
    }

    public function search($value)
    {
        try{
            $url = self::API_URL . "/search/tweets.json";
            $header = array('Authorization'=>'Bearer ' . $this->accessToken);
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
        die("error");
    }
}
