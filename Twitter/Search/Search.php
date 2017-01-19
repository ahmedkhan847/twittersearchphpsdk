<?php
namespace Twitter\Search;
/**
*
*/
class Search extends \Twitter\Base
{
    
    public function search($value)
    {
        try{
            $url = "/search/tweets.json";
            $response = $this->callTwitter("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }
}
?>