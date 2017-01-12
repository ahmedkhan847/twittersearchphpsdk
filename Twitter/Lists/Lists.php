<?php
namespace Twitter\Lists;

/**
 * 
 */
class Lists extends \Twitter\Base
{
    
    public function getSpecifiedList($value)
    {
        try{           
            $url = "/lists/members.json";            
            $post = ["list_id" => $value];
            $response = $this->callTwitter("get",$url,$post);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
    public function getList($value)
    {
        try{
            
            $url = "/lists/ownerships.json";
            $post = ["user_id" => $value];
            $response = $this->callTwitter("post",$url,$post);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }   
}
?>