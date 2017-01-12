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
    protected $accesstoken = null;
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function setTokken($token,$secret)
    {
        $this->token = $token;
        $this->tokensecret = $secret;
    }
    protected function prepareAccessToken()
    {
        try{
            $url = "https://api.twitter.com/oauth2/token";
            $value = ['grant_type' => "client_credentials"
            ];
            $header = array('Authorization'=>'Basic ' .base64_encode($this->token.":".$this->tokensecret),
            "Content-Type"=>"application/x-www-form-urlencoded;charset=UTF-8");
            $response = $this->client->post($url, ['query' => $value,'headers' => $header]);
            $result = json_decode($response->getBody()->getContents());
            
            $this->accesstoken = $result->access_token;
            return $this->accesstoken;
        }
        catch (RequestException $e) {
            $response = $this->statusCodeHandling($e);
            return $response;
        }
    }

    public function search($value)
    {
        try{
            $this->prepareAccessToken();
            $url = self::API_URL . "/search/tweets.json";
            $header = array('Authorization'=>'Bearer ' . $this->accesstoken);
            $post = ["q" => $value];
            $response = $this->client->get($url, array('query' => $post,'headers' => $header));
            return json_decode($response->getBody()->getContents());
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    protected function statusCodeHandling($e)
    {
        $response = array("statuscode" => $e->getResponse()->getStatusCode(),
                        "error" => json_decode($e->getResponse()->getBody(true)->getContents()));
        return $response;
        
        
    }
}
