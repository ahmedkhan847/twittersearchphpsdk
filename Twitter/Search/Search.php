<?php
namespace Twitter\Search;
/**
 * 
 */

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class Search extends \Twitter\Base
{

    public function search($value)
    {
        try{
            $url = "/search/tweets.json";
            $response = $this->callTwitter("get",$url,$post);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }    
}
?>